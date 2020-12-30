-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2020 г., 12:49
-- Версия сервера: 10.1.34-MariaDB
-- Версия PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `child`
--

-- --------------------------------------------------------

--
-- Структура таблицы `child`
--

CREATE TABLE `child` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `age` date NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `days` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `child`
--

INSERT INTO `child` (`id`, `name`, `age`, `weight`, `height`, `days`) VALUES
(1, 'Анна', '2018-12-05', 40, 155, 400),
(6, 'Михаил', '2018-12-01', 42, 145, 201);

-- --------------------------------------------------------

--
-- Структура таблицы `parent`
--

CREATE TABLE `parent` (
  `id_par` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `id_child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `parent`
--

INSERT INTO `parent` (`id_par`, `name`, `id_child`) VALUES
(2, 'Михаил', 6),
(3, 'Инна', 1),
(5, 'Елена', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id_par`),
  ADD KEY `id_child` (`id_child`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `child`
--
ALTER TABLE `child`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `parent`
--
ALTER TABLE `parent`
  MODIFY `id_par` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `id_par` FOREIGN KEY (`id_child`) REFERENCES `child` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
