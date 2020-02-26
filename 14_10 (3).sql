-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 26 2020 г., 17:14
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
(3, 'red', '#contacts', 'Контакты', 15),
(4, 'red', '/admin', 'Админка', 20),
(6, 'red', '/reg', 'регистрация', 30),
(7, 'red', '/auth', 'sign in', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `header` varchar(250) NOT NULL,
  `parag` text NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `quest` varchar(100) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `faq`
--

INSERT INTO `faq` (`id`, `quest`, `answer`, `ordera`) VALUES
(1, 'Сколько за тур?\"', 'Недорого. В дороге накормим', 5),
(2, 'Сколько стоит виза?', 'Зачем виза? Мы так провезем', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `content` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `headers`
--

INSERT INTO `headers` (`id`, `content`) VALUES
(1, 'ПУТЕШЕСТВУЙ КРАСИВО! БЛОГ В ФОТОГРАФИЯХ!'),
(2, 'ПРИЧИНЫ ВОСПОЛЬЗОВАТЬСЯ НАШИМИ УСЛУГАМИ!');

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `content` varchar(600) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `content`, `ordera`) VALUES
(5, ' такового нет', 200),
(12, 'asdasd', 2323),
(20, ' asdf', 110),
(22, ' asd', 111110),
(23, ' самый классный параграф', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `keywords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `keywords`
--

INSERT INTO `keywords` (`id`, `keywords`) VALUES
(1, '\'Путешествия '),
(2, 'путевки в Турцию '),
(3, 'Мальдивы '),
(4, 'Финляндия\'');

-- --------------------------------------------------------

--
-- Структура таблицы `li_info`
--

CREATE TABLE `li_info` (
  `id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `ordera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `li_info`
--

INSERT INTO `li_info` (`id`, `content`, `ordera`) VALUES
(1, 'Веселые анимации', 1),
(2, 'Неплохие номера', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `date`) VALUES
(5, 'Paul', 'isakura313@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3, 19-02-2020', '0000-00-00'),
(6, 'isakura313', 'isakura313@mail.ru', '737b58a67663a7dba33d29b369e995427be551bbdc5b358d2ccb7d1a514e3d5d, 21-02-2020', '0000-00-00'),
(7, 'Pokemon', 'pokemon@example.ru', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3, 24-02-2020', '0000-00-00'),
(8, 'павел', 'фывфыв', 'фывфыв', '1000-00-00'),
(9, 'asdasd', 'asdasd', 'asdasd', NULL),
(10, 'pokemon3', 'pokemon3@exa.com', 'asdasd', NULL),
(11, 'pokemon4', 'pokemon4@exa.com', '6bac49cd894e20104570671846c5f59b8e0114866918f3507cbb363b10091a3f', NULL),
(12, 'pokemon5', 'pokemon5@exa.com', 'd38371d7758d48022a342e6c0a9a736a92fe09c355253de9c2c8edb8a5e9a4b6', '1000-00-00'),
(13, 'pokemon6', 'pokemon6@exa.com', '6bac49cd894e20104570671846c5f59b8e0114866918f3507cbb363b10091a3f', '2020-02-24');

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
-- Индексы таблицы `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `li_info`
--
ALTER TABLE `li_info`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anchors`
--
ALTER TABLE `anchors`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `li_info`
--
ALTER TABLE `li_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
