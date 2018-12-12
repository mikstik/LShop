<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="ui/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="ui/css/style.css"> <!-- Resource style -->
	<script src="ui/js/modernizr.js"></script> <!-- Modernizr -->
	<title>Админка</title>
</head>
<body class="adminmenu">
    <div class="leftadminmenu" id="leftbar">
        <div class="side">
            <a href="adminpanel"><h1>Панель администратора</h1></a>
            <ul class="menu">
                <li class="menulist"><a href="">Заказы</a></li>
                <li class="menulist"><a href="">Завершенные заказы</a></li>
                <li class="menulist"><a href="">Все заказы</a></li>
            </ul>
        </div>
    </div>
    <div class="leftadminmenu" id="zakazi">  
    <table class="table" id="toptable">
    <thead class="orders">
    <tr>
      <th scope="col">Номер заказа</th>
      <th scope="col">Имя заказчика</th>
      <th scope="col">Номер телефона</th>
      <th scope="col">Сумма</th>
      <th scope="col">Содержимое</th>
      <th scope="col">✔</th>
      <th scope="col">✖</th>
    </tr>
    <tbody>
    <tr>
      <th scope="">1</th>
      <td>Alex</td>
      <td>+79099729330</td>
      <td>1000 рублей</td>
      <td><a href="" class="ordersbutton">Просмотреть</a></td>
      <td><a href="" class="ordersbutton">✔</a></td>
      <td><a href="" class="ordersbutton">✖</a></td>
    </tr>
  </tbody>
  </thead>
</table>
</div> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>