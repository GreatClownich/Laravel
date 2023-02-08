<!DOCTYPE HTML>
<html lang = "ru">
	<head>
		<meta charset ="">
		<link href="css/styleAPT.css" rel="stylesheet">
		<style>body::before{
        content: '';
        position: fixed; /* Фиксируем на одном месте */
        left: 0; right: 0; /* Вся ширин */
        top: 0; bottom: 0; /* Вся высота */
        z-index: -1; /* Фон ниже текста */
        /* Параметры фона */
        background: url("http://photos.wikimapia.org/p/00/04/17/69/60_full.jpg") center / cover no-repeat;
        filter: blur(4px); /* Размытие */
        }
        </style>
	</head>
	<div class="links">
		<div class="link2"><a href="HOME">Главная</a></div>
		<div class="link1"><a href="about">О нас</a></div>
		<div class="link1"><a href="u20">И-20-1 </a></div>
	</div>
	<body>
	
	<form action="{{ route('stud-form')}}" method="post">
        @csrf 
        <div class ="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-cintrol"> </input>
	</div>
	</form>
	</body>
</html>

	
	
