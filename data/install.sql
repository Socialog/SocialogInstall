-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 24 aug 2012 om 19:25
-- Serverversie: 5.5.24
-- PHP-Versie: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;

--
-- Gegevens worden uitgevoerd voor tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`) VALUES
(1, 'Introducing Socialog!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor neque vitae risus iaculis vel imperdiet nibh venenatis. Quisque blandit tempus libero, eu venenatis quam sodales ac. Phasellus nunc justo, tincidunt laoreet rutrum eget, viverra a augue. Nulla laoreet mauris non metus aliquet venenatis. Praesent in mi lorem. In hac habitasse platea dictumst. Nam nec volutpat quam. Fusce tellus metus, malesuada eu congue quis, bibendum et ante. Suspendisse mollis mi quis lorem gravida in scelerisque est commodo. Duis auctor, sem non sagittis pretium, ligula ipsum fermentum quam, imperdiet volutpat ipsum urna vel ligula. Sed eu nibh sem. Aenean enim odio, fermentum at scelerisque condimentum, porta id turpis. Nulla cursus, elit sit amet egestas vestibulum, magna turpis egestas elit, eu bibendum sem lorem eget sem.<br><br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor neque vitae risus iaculis vel imperdiet nibh venenatis. Quisque blandit tempus libero, eu venenatis quam sodales ac. Phasellus nunc justo, tincidunt laoreet rutrum eget, viverra a augue. Nulla laoreet mauris non metus aliquet venenatis. Praesent in mi lorem. In hac habitasse platea dictumst. Nam nec volutpat quam. Fusce tellus metus, malesuada eu congue quis, bibendum et ante. Suspendisse mollis mi quis lorem gravida in scelerisque est commodo. Duis auctor, sem non sagittis pretium, ligula ipsum fermentum quam, imperdiet volutpat ipsum urna vel ligula. Sed eu nibh sem. Aenean enim odio, fermentum at scelerisque condimentum, porta id turpis. Nulla cursus, elit sit amet egestas vestibulum, magna turpis egestas elit, eu bibendum sem lorem eget sem.<br></span><br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor neque vitae risus iaculis vel imperdiet nibh venenatis. Quisque blandit tempus libero, eu venenatis quam sodales ac. Phasellus nunc justo, tincidunt laoreet rutrum eget, viverra a augue. Nulla laoreet mauris non metus aliquet venenatis. Praesent in mi lorem. In hac habitasse platea dictumst. Nam nec volutpat quam. Fusce tellus metus, malesuada eu congue quis, bibendum et ante. Suspendisse mollis mi quis lorem gravida in scelerisque est commodo. Duis auctor, sem non sagittis pretium, ligula ipsum fermentum quam, imperdiet volutpat ipsum urna vel ligula. Sed eu nibh sem. Aenean enim odio, fermentum at scelerisque condimentum, porta id turpis. Nulla cursus, elit sit amet egestas vestibulum, magna turpis egestas elit, eu bibendum sem lorem eget sem.<br></span><br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor neque vitae risus iaculis vel imperdiet nibh venenatis. Quisque blandit tempus libero, eu venenatis quam sodales ac. Phasellus nunc justo, tincidunt laoreet rutrum eget, viverra a augue. Nulla laoreet mauris non metus aliquet venenatis. Praesent in mi lorem. In hac habitasse platea dictumst. Nam nec volutpat quam. Fusce tellus metus, malesuada eu congue quis, bibendum et ante. Suspendisse mollis mi quis lorem gravida in scelerisque est commodo. Duis auctor, sem non sagittis pretium, ligula ipsum fermentum quam, imperdiet volutpat ipsum urna vel ligula. Sed eu nibh sem. Aenean enim odio, fermentum at scelerisque condimentum, porta id turpis. Nulla cursus, elit sit amet egestas vestibulum, magna turpis egestas elit, eu bibendum sem lorem eget sem.<br></span><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor neque vitae risus iaculis vel imperdiet nibh venenatis. Quisque blandit tempus libero, eu venenatis quam sodales ac. Phasellus nunc justo, tincidunt laoreet rutrum eget, viverra a augue. Nulla laoreet mauris non metus aliquet venenatis. Praesent in mi lorem. In hac habitasse platea dictumst. Nam nec volutpat quam. Fusce tellus metus, malesuada eu congue quis, bibendum et ante. Suspendisse mollis mi quis lorem gravida in scelerisque est commodo. Duis auctor, sem non sagittis pretium, ligula ipsum fermentum quam, imperdiet volutpat ipsum urna vel ligula. Sed eu nibh sem. Aenean enim odio, fermentum at scelerisque condimentum, porta id turpis. Nulla cursus, elit sit amet egestas vestibulum, magna turpis egestas elit, eu bibendum sem lorem eget sem.<br>'),
