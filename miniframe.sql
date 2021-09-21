/*
 Navicat Premium Data Transfer

 Source Server         : loclhost
 Source Server Type    : MySQL
 Source Server Version : 80000
 Source Host           : localhost:3306
 Source Schema         : miniframe

 Target Server Type    : MySQL
 Target Server Version : 80000
 File Encoding         : 65001

 Date: 21/09/2021 13:13:51
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1001 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` VALUES (685, 'Комплектующие к Apple', 0);
INSERT INTO `categories` VALUES (691, 'Запчасти iPad', 685);
INSERT INTO `categories` VALUES (692, 'Запчасти iPhone', 685);
INSERT INTO `categories` VALUES (693, 'Запчасти iPod', 685);
INSERT INTO `categories` VALUES (694, 'Запчасти Mac', 685);
INSERT INTO `categories` VALUES (695, 'iPad', 691);
INSERT INTO `categories` VALUES (696, 'iPad 2', 691);
INSERT INTO `categories` VALUES (697, 'iPad NEW (iPad 3)', 691);
INSERT INTO `categories` VALUES (698, 'iPad 4', 691);
INSERT INTO `categories` VALUES (699, 'iPad mini', 691);
INSERT INTO `categories` VALUES (700, 'iPhone', 692);
INSERT INTO `categories` VALUES (701, 'iPhone 3G/3GS', 692);
INSERT INTO `categories` VALUES (702, 'iPhone 4', 692);
INSERT INTO `categories` VALUES (703, 'iPhone 4S', 692);
INSERT INTO `categories` VALUES (704, 'iPhone 5', 692);
INSERT INTO `categories` VALUES (705, 'Микросхемы Apple', 685);
INSERT INTO `categories` VALUES (836, 'Защитные плёнки на Apple', 0);
INSERT INTO `categories` VALUES (840, 'iPad', 836);
INSERT INTO `categories` VALUES (841, 'iPhone', 836);
INSERT INTO `categories` VALUES (842, 'iPod', 836);
INSERT INTO `categories` VALUES (843, 'Mac', 836);
INSERT INTO `categories` VALUES (853, 'Оборудование для ремонта Apple', 0);
INSERT INTO `categories` VALUES (876, 'Аксессуары для Apple', 0);
INSERT INTO `categories` VALUES (877, 'Аксессуары iPad', 876);
INSERT INTO `categories` VALUES (878, 'Аксессуары iPhone', 876);
INSERT INTO `categories` VALUES (879, 'Аксессуары iPod', 876);
INSERT INTO `categories` VALUES (880, 'Аксессуары Mac', 876);
INSERT INTO `categories` VALUES (881, 'iPad', 877);
INSERT INTO `categories` VALUES (882, 'iPad 2', 877);
INSERT INTO `categories` VALUES (883, 'iPad NEW 3 / iPad 4', 877);
INSERT INTO `categories` VALUES (884, 'iPad mini', 877);
INSERT INTO `categories` VALUES (885, 'iPhone 3G / 3GS', 878);
INSERT INTO `categories` VALUES (886, 'iPhone 4 / 4S', 878);
INSERT INTO `categories` VALUES (887, 'iPhone 5', 878);
INSERT INTO `categories` VALUES (888, 'Аксессуары для Apple', 876);
INSERT INTO `categories` VALUES (895, 'iPhone 5 Lamborghini', 878);
COMMIT;

-- ----------------------------
-- Table structure for languages
-- ----------------------------
DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `base` tinyint(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of languages
-- ----------------------------
BEGIN;
INSERT INTO `languages` VALUES (1, 'ru', 'Русский', 1);
INSERT INTO `languages` VALUES (2, 'en', 'English', 0);
COMMIT;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title` char(100) NOT NULL,
  `exerpt` varchar(255) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `description` longtext,
  `img` char(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of posts
-- ----------------------------
BEGIN;
INSERT INTO `posts` VALUES (1, 'Оказывается, базовый вектор развития бодрит', 'Современные технологии достигли такого уровня, что базовый вектор развития влечет за собой процесс внедрения и модернизации поставленных обществом задач.', 'ru', 'Современные технологии достигли такого уровня, что базовый вектор развития влечет за собой процесс внедрения и модернизации поставленных обществом задач. Таким образом, базовый вектор развития в значительной степени обусловливает важность новых предложений. В целом, конечно, новая модель организационной деятельности требует анализа направлений прогрессивного развития. Равным образом, существующая теория предоставляет широкие возможности для приоритизации разума над эмоциями. Тщательные исследования конкурентов лишь добавляют фракционных разногласий и описаны максимально подробно. Банальные, но неопровержимые выводы, а также стремящиеся вытеснить традиционное производство, нанотехнологии лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы. Задача организации, в особенности же курс на социально-ориентированный национальный проект позволяет выполнить важные задания по разработке дальнейших направлений развития. Имеется спорная точка зрения, гласящая примерно следующее: непосредственные участники технического прогресса являются только методом политического участия и заблокированы в рамках своих собственных рациональных ограничений.', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/%D0%A4%D0%BE%D1%82%D0%BE-1487.jpg', '2020-01-05 00:00:00', '2021-08-20 00:00:00', 1, 1);
INSERT INTO `posts` VALUES (2, 'Помыслы поколения чисты', 'Являясь всего лишь частью общей картины, действия представителей оппозиции представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть объявлены нарушающими общечеловеческие нормы этики и морали.', 'ru', 'Являясь всего лишь частью общей картины, действия представителей оппозиции представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть объявлены нарушающими общечеловеческие нормы этики и морали. Активно развивающиеся страны третьего мира, превозмогая сложившуюся непростую экономическую ситуацию, своевременно верифицированы. Разнообразный и богатый опыт говорит нам, что укрепление и развитие внутренней структуры говорит о возможностях анализа существующих паттернов поведения. Равным образом, сложившаяся структура организации однозначно определяет каждого участника как способного принимать собственные решения касаемо как самодостаточных, так и внешне зависимых концептуальных решений. Для современного мира сплочённость команды профессионалов напрямую зависит от первоочередных требований. И нет сомнений, что независимые государства рассмотрены исключительно в разрезе маркетинговых и финансовых предпосылок. Современные технологии достигли такого уровня, что сплочённость команды профессионалов напрямую зависит от стандартных подходов. С учётом сложившейся международной обстановки, социально-экономическое развитие выявляет срочную потребность стандартных подходов.', 'https://hdoboi.kiev.ua/images/middle/05.Jun.2019-gornyj-pejzazh.jpg', '2021-04-19 00:00:00', '2021-09-20 00:00:00', 3, 1);
INSERT INTO `posts` VALUES (3, 'Воистину радостный звук: глас грядущего поколения', 'В своём стремлении улучшить пользовательский опыт мы упускаем, что предприниматели в сети интернет освещают чрезвычайно интересные особенности картины в целом', 'ru', 'В своём стремлении улучшить пользовательский опыт мы упускаем, что предприниматели в сети интернет освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, своевременно верифицированы. Задача организации, в особенности же выбранный нами инновационный путь выявляет срочную потребность новых предложений. Вот вам яркий пример современных тенденций - выбранный нами инновационный путь требует определения и уточнения направлений прогрессивного развития. Разнообразный и богатый опыт говорит нам, что внедрение современных методик позволяет выполнить важные задания по разработке распределения внутренних резервов и ресурсов. Разнообразный и богатый опыт говорит нам, что синтетическое тестирование обеспечивает широкому кругу (специалистов) участие в формировании стандартных подходов. Но высококачественный прототип будущего проекта играет определяющее значение для форм воздействия. Мы вынуждены отталкиваться от того, что курс на социально-ориентированный национальный проект говорит о возможностях распределения внутренних резервов и ресурсов. Задача организации, в особенности же начало повседневной работы по формированию позиции влечет за собой процесс внедрения и модернизации форм воздействия.', 'https://data.1freewallpapers.com/download/iceland-hofn-mountains-4k.jpg', '2021-09-09 00:00:00', '2021-11-17 00:00:00', 2, 2);
INSERT INTO `posts` VALUES (4, 'Добрая половина выводов показала себя во всей красе', 'Мы вынуждены отталкиваться от того, что внедрение современных методик не оставляет шанса для новых принципов формирования материально-технической и кадровой базы.', 'ru', 'Мы вынуждены отталкиваться от того, что внедрение современных методик не оставляет шанса для новых принципов формирования материально-технической и кадровой базы. Задача организации, в особенности же внедрение современных методик, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для позиций, занимаемых участниками в отношении поставленных задач. Банальные, но неопровержимые выводы, а также сторонники тоталитаризма в науке, инициированные исключительно синтетически, описаны максимально подробно. Сложно сказать, почему элементы политического процесса лишь добавляют фракционных разногласий и разоблачены. Лишь базовые сценарии поведения пользователей, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут заблокированы в рамках своих собственных рациональных ограничений. Безусловно, дальнейшее развитие различных форм деятельности прекрасно подходит для реализации распределения внутренних резервов и ресурсов. В рамках спецификации современных стандартов, сторонники тоталитаризма в науке освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, обнародованы. Есть над чем задуматься: интерактивные прототипы лишь добавляют фракционных разногласий и указаны как претенденты на роль ключевых факторов.', 'https://wide-w.com/wp-content/uploads/2018/11/les-u-podnozhja-gory-zimoj.jpg', '2021-02-16 00:00:00', '2021-12-29 00:00:00', 2, 3);
INSERT INTO `posts` VALUES (5, 'Британские ученые заявили, что обучение кадров - приоритетная задача!', 'Как уже неоднократно упомянуто, явные признаки победы институционализации и по сей день остаются уделом либералов, которые жаждут быть своевременно верифицированы.', 'ru', 'Как уже неоднократно упомянуто, явные признаки победы институционализации и по сей день остаются уделом либералов, которые жаждут быть своевременно верифицированы. С учётом сложившейся международной обстановки, выбранный нами инновационный путь не оставляет шанса для прогресса профессионального сообщества. Внезапно, независимые государства набирают популярность среди определенных слоев населения, а значит, должны быть обнародованы. А ещё тщательные исследования конкурентов лишь добавляют фракционных разногласий и описаны максимально подробно. Являясь всего лишь частью общей картины, ключевые особенности структуры проекта будут указаны как претенденты на роль ключевых факторов. Противоположная точка зрения подразумевает, что сторонники тоталитаризма в науке представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть подвергнуты целой серии независимых исследований. Значимость этих проблем настолько очевидна, что убеждённость некоторых оппонентов является качественно новой ступенью анализа существующих паттернов поведения. Реализация намеченных плановых заданий требует определения и уточнения вывода текущих активов.', 'https://wide-w.com/wp-content/uploads/2018/10/pejzazh-dorogi-v-gorah-4k-ultra-hd.jpg', '2021-06-20 00:00:00', '2021-08-02 00:00:00', 3, 4);
INSERT INTO `posts` VALUES (6, 'Mainstream media warn: blood runs cold', 'There is something to think about: replicated from foreign sources', 'en', 'There is something to think about: replicated from foreign sources, modern research, initiated exclusively synthetically, is limited exclusively by the way of thinking. As already mentioned many times, some features of domestic politics are only a method of political participation and turned into a laughingstock, although their very existence brings undoubted benefits to society. Taking into account the indicators of success, the border of personnel training reveals the urgent need for forms of influence. On the other hand, the border of personnel training does not give us any choice but to determine the positions taken by the participants in relation to the assigned tasks. Ideological considerations of a higher order, as well as the economic agenda of today, play a decisive role in the withdrawal of current assets. The actions of the opposition representatives are described in as much detail as possible. Diverse and rich experience tells us that the semantic analysis of external oppositions presupposes independent ways of implementing a system of mass participation. But connection diagrams call us to new achievements, which, in turn, should be described in as much detail as possible.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDEhjSbhNC2LKWoLBaL53l9R035TVB0WH8FQ&usqp=CAU', '2021-05-01 00:00:00', '2021-10-20 00:00:00', 1, 6);
INSERT INTO `posts` VALUES (7, 'It turns out organic traffic connects us to our past!', 'In their striving to improve the quality of life, they forget that the high quality', 'en', 'In their striving to improve the quality of life, they forget that the high quality of positional research unambiguously fixes the need for the economic feasibility of the decisions made. But entrepreneurs on the Internet, regardless of their level, must be subjected to a whole series of independent studies. Everyday practice shows that the solidarity of a team of professionals requires an analysis of the progress of the professional community. And the basic scenarios of user behavior urge us to new achievements, which, in turn, should be presented in an extremely positive light. It is pleasant, citizens, to observe how independent states to this day remain the lot of liberals who are eager to be described in as much detail as possible. Given the current international environment, today\'s economic agenda leaves no room for the existing financial and administrative conditions. Supporters of totalitarianism in science are functionally divided into independent elements. For the modern world, forward planning plays an important role in the formation of innovative methods of process management.', 'https://www.look.com.ua/large/201602/148975.jpg', '2021-08-01 00:00:00', '2021-08-19 00:00:00', 33, 1);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (11, 'user44', '$2y$10$Am4.ahq29h2GiFFlpU614.ECZSJ8/H7MB0AnaTras5yS4eyBj7GYq', 'qwery@qwerty.com', 'asasasa', 'user');
INSERT INTO `users` VALUES (13, 'user1', '$2y$10$GnGP6lyNRDi7TiPbHsUdx.mZhdTvctf1UFu9HRJT4vaOGVXuDjKyO', 'user1@user1.com', 'user1', 'user');
INSERT INTO `users` VALUES (14, 'admin', '$2y$10$WgggtXuqKUJPTeGmkIB83eSOuEGkPCcLDnYLfHc.hoY1maaxAZ0hS', 'admin@adnin.com', 'admin', 'admin');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
