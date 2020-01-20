-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 20 2020 г., 19:38
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `14_10`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anchors`
--

CREATE TABLE `anchors` (
  `id` int(6) UNSIGNED NOT NULL,
  `color` varchar(30) NOT NULL,
  `path` varchar(255) NOT NULL,
  `content` varchar(50) NOT NULL,
  `ordera` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `anchors`
--

INSERT INTO `anchors` (`id`, `color`, `path`, `content`, `ordera`) VALUES
(1, 'white', '#main', 'Главная', 5),
(2, 'red', '#about', 'О нас', 10),
(3, 'green', '#contacts', 'Контакты', 15),
(4, 'red', 'admin.php', 'Админка', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `header` varchar(100) NOT NULL,
  `parag` text NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `img`, `header`, `parag`, `ordera`) VALUES
(1, 'card__moscow', 'Путешествия по России', 'Балалайки, матрешки, Кремль', 5),
(2, 'card__london', 'Путешествия по Европе', 'Разные страны, разные культуры! Все самое модное в Европе!', 10),
(3, 'card__africa', 'Путешествия по Африке', 'Классные сафари, быстрые львы и неверотные саванны! Все в одном флаконе! Бонус: купание с крокодилами', 15),
(4, 'card__south', 'Путешествия по Южной Америке', 'Южная Америка ждет нас! И там куда безопаснее, чем в американских фильмах!', 20),
(5, 'card__north', 'Путешествия по Северной Америке', 'Конечно мы проедем всю Америку, и обязательно заедем в Голливуд!', 25),
(6, 'card__australia', 'Путешествия по Австралии', 'Австралия, кенгуру, летающих пауков там нет! Или есть. Приезжайте и проверьте сами', 30);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anchors`
--
ALTER TABLE `anchors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anchors`
--
ALTER TABLE `anchors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
