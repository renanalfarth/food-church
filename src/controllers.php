<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

$app->get('/', function () use ($app) {
  return new RedirectResponse('index');
})
->bind('homepage')
;

$app->get('/index', function () use ($app) {

    $find_sql = "SELECT * FROM `plate`";
    $plates   = $app['db']->fetchAll($find_sql, array());

    return $app['twig']->render('index.html.twig', array('plates' => $plates, 'menu_ativo' => 'balcao'));
})
->bind('index')
;

$app->get('/orders', function () use ($app) {

    $find_sql = "SELECT * FROM `order` where status = 1";
    $orders   = $app['db']->fetchAll($find_sql, array());

    return $app['twig']->render('orders.html.twig', array('orders' => $orders, 'menu_ativo' => 'pedidos'));
})
->bind('orders')
;

$app->get('/delivered', function () use ($app) {

    $find_sql = "SELECT * FROM `order` where status = 2";
    $orders   = $app['db']->fetchAll($find_sql, array());

    return $app['twig']->render('delivered.html.twig', array('orders' => $orders, 'menu_ativo' => 'pedidos-entregues'));
})
->bind('delivered')
;

$app->post('/save', function (Request $request) use ($app) {

  $saleDescription = '<hr />';

  foreach($request->request->get('quantidade') as $name => $qtd) {
    if($qtd <= 0) {
      continue;
    }
    // MUDO A DESCRIÇÃO
    $saleDescription .= '<p>'.$qtd.' - '.$name.'</p>';
  }

  $observacao = $request->request->get('observacao');

  $insert_query = "INSERT INTO `order` (`descricao`, `status`, `observacao`) VALUES (?, ?, ?)";
  $status       = $app['db']->executeUpdate($insert_query, array($saleDescription, '1', $observacao));

  if($status == 1) {
    $id_sale = $app['db']->lastInsertId('users_seq');

    foreach($request->request->get('quantidade') as $name => $qtd) {
      if($qtd <= 0) {
        continue;
      }
      // INSIRO OS ITENS PARA PODER CONTABILIZAr
      $insert_query = "INSERT INTO `item` (`order_id`, `plate_name`, `quantity`) VALUES (?, ?, ?)";
      $status_uptd  = $app['db']->executeUpdate($insert_query, array($id_sale, $name, $qtd));
    }

    return $id_sale;
  } else {
    return 0;
  }

})
->bind('save')
;

$app->post('/check', function (Request $request) use ($app) {

  $id = $request->request->get('id');

  $insert_query = "UPDATE `order` SET `status` = ? where id = ?";
  $status       = $app['db']->executeUpdate($insert_query, array(2, $id));

  return $status;

})
->bind('check')
;

$app->post('/totais', function (Request $request) use ($app) {
  $find_sql = "SELECT plate_name name, count(*) quantity FROM `item` group by plate_name";
  $totais   = $app['db']->fetchAll($find_sql, array());

  return json_encode($totais);
})
->bind('totais')
;

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
