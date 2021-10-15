-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: אוקטובר 15, 2021 בזמן 06:12 PM
-- גרסת שרת: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shanilv_story`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`) VALUES
(111, 'Elior', 'אין על רוסטיקו!'),
(112, 'Niki', 'זליג הקטן הוא גדול!'),
(118, 'Meir Adoni', 'פלאפל בריבוע - הכי ביתי שישי! ממליץ בחום.');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `gifts`
--

CREATE TABLE `gifts` (
  `ID` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(100) NOT NULL,
  `stock` int(7) NOT NULL,
  `purchased` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `gifts`
--

INSERT INTO `gifts` (`ID`, `name`, `price`, `description`, `stock`, `purchased`) VALUES
(1, 'אהבת חינם', 50, 'נתינה זאת הקבלה הגדולה ביותר', 3000, 333),
(2, 'סיור קולינארי בשרונה מרקט', 80, 'סיור מודרך עם מקומי במסעדות שחייב להכיר', 3000, 5),
(3, 'ארוחת בוקר זוגית', 150, 'בואו להנות מארוחת בוקר זוגית מפנקת,יינות מובחרים ואווירה פסטורלית', 3000, 10),
(4, 'כרטיסייה  של 5 ארוחות צהריים', 200, 'מה יותר כיף מלקבל הרבה תמורת מעט? בואו להנות מארוחות צהריים מפנקות שמשאירות טעם של עוד', 3000, 30),
(5, 'ארוחת שף פרטית', 300, 'השף הכי טוב בעיר מגיע עד אליכם הביתה לבשל מהלב!', 3000, 10),
(6, 'סדנת אפייה אישית', 350, 'בואו לגלות את הסודות הכמוסים של השף אצלכם בבית', 3000, 10),
(7, 'אינטרקום מתנה', 80, 'אינטרקום משוכלל שיאפשר לכם לראות ולשמוע מי בשער', 3000, 70),
(8, 'מצלמת אבטחה לחצר', 150, 'אנחנו שם- כדי להבטיח שאתם תדעו הכל, גם שאתם לא שם', 3000, 99),
(9, 'דוד חשמלי חכם', 200, 'התקנת דוד חשמלי עם אפליקציה לשליטה מרחוק', 3000, 300),
(10, 'מצלמת חצר ואינטרקום', 300, 'בואו לשכלל את הבית שלכם עם המוצרים האיכותיים שלנו', 3000, 14),
(11, 'חבילת אבטחה', 350, 'אנחנו מביטיחים לכם שתיהיו בטוחים עם מצלמות במעגל סגור, מצלמת חצר, איטרקום ודוד חשמלי', 3000, 15),
(12, 'שהייה במתקני ספא', 80, 'בואו להנות משעה שלמה של רוגע ושלווה במתקני הספא', 3000, 50),
(13, 'מסאז\' שוודי יחיד', 150, 'הגיע הזמן להתפנק ב45 דק\' של מסאז מרגיע ומפנק', 3000, 50),
(14, 'מסאז\' שוודי זוגי', 200, 'טובים השניים מהאחד- 45 דק\' יגרמו לכם לשכוח את התקופה הזו', 3000, 290),
(15, 'עיסוי רקמות עמוק יחיד', 300, 'טכניקת עיסוי מערבית עמוקה וממוקדת לשחרור שרירים ונקודות מתח באזורים שונים בגוף.', 3000, 14),
(16, 'עיסוי אבנים חמות זוגי', 350, 'אבני בזלת חמות. טיפול אינדיאני מקורי ומרגיע העוטף את הגוף בחום ורכות. חוויה בלתי נשכחת.', 3000, 18),
(17, 'שמלת מוניקה מתנה', 80, 'שמלת מוניקה לבנה וחגיגית בשווי 150 ש\"ח', 3000, 0),
(18, 'סדנת סטיילינג אישית', 150, 'בואו לללמוד מה מתאים למבנה הגוף שלכם', 3000, 2),
(19, 'סדנת סטיילינג זוגית', 200, 'טובים השניים מן האחד- נלמד איך לשדרג את ההופעה וללבוש מה שנעים לכם', 3000, 2),
(20, 'תכשיט מתנה', 300, 'תבחרו תכשיט איכותי מתנה!', 3000, 2),
(21, 'קופון בשווי 500 ש\"ח', 350, 'מה יותר כיף מלקבל יותר ולשלם פחות? בקנייה זו תקבלו קופון על סך 500 ש\"ח בפחות כסף!', 3000, 30),
(22, 'אכול גלידה כפי יכולתך', 80, 'תקבלו שני גביעים ותהנו כמה פעמים שרק תרצו', 3000, 30),
(23, 'שני משלוחים גלידה עד אליכם', 150, 'אנחנו נגיע אליכם- אתם לא תצטרכו לדאוג משום דבר חוץ מלבחור את הטעמים האהובים עליכם', 3000, 34),
(24, 'סדנת מתוקים', 200, 'בואו ללמוד איך עושים גלידה ביתית משובחת - חומרי הגלם עלינו!', 3000, 45),
(25, 'כרטיסייה של 20 גביעי גלידה', 300, 'מה יותר כיף מגלידה ללא הפסקה? בואו להנות מתי שתרצו וכמה שתרצו!', 3000, 36),
(26, 'שולחן קינוחים', 350, 'מה יותר כיף מלקבל יותר ולשלם פחות? אנחנו מגיעים עד אליכם עם שולחן קינוחים שיעיף אתכם!', 3000, 27),
(27, 'תספורת מתנה', 80, 'התחדשות מדהימה אחרי תקופה ארוכה', 3000, 40),
(28, 'תסרוקת ואיפור לאירוע מיוחד', 150, 'אנחנו נגיע אליכם- אתם לא תצטרכו לדאוג משום דבר', 3000, 56),
(29, 'סדנת איפור אישית', 200, 'בואו ללמוד את הסודות הכמוסים של עולם האיפור תוך התאמת צבעים', 3000, 33),
(30, 'סדנת תסרוקות אישית', 300, 'הקורס מכיל תכנים מקיפים אודות עולם התסרוקות, החל מהבסיס', 3000, 13),
(31, 'סידור שיער כלה', 350, 'אנחנו ניהיה איתך ביום הכי מיוחד שלך', 3000, 8),
(32, 'כרטיסייה של 5 מנות פלאפל', 80, 'מה יותר טוב מלעצור לרגע ולאכול פלאפל?', 3000, 5),
(33, 'אכול כפי יכולתך', 150, 'כמה שתרצה- עלינו!', 3000, 99),
(34, 'סדנת פלאפל מקצועית', 200, 'בואו ללמוד מהטובים ביותר איך לעשות את המאכל האהוב ביותר בישראל', 3000, 100),
(35, 'שולחן פלאפל עד הבית', 300, 'שולחן פלאפל עם מלא דברים טובים', 3000, 85),
(36, 'קופון בשווי 500 ש\"ח לקניית פלא', 350, 'מה יותר כיף משלם פחות ולקבל יותר?', 3000, 55),
(37, 'עיצוב לוגו', 80, 'נייצר יחד לוגו שיתאים בדיוק לחלומות שלכם', 3000, 10),
(38, 'סדנת צילום בסמארטפון', 150, 'מה יותר חשוב בימינו מאשר לדעת לצלם? בואו לגלות את כל הסודות שיהפכו אתכם לצלמים מקצועיים', 3000, 15),
(39, 'בוק אישי', 200, 'בואו לצלם את הרגעים היפים של החיים', 3000, 14),
(40, 'עיצוב דף נחיתה', 300, 'תמיד חלמתם על דף נחיתה מעוצב? עכשיו יש לכם הזדמנות', 3000, 34),
(41, 'ייעוץ גרפיקאי לכל מצב', 350, 'אהיה כאן לעזרתכם בכל שאלה או בעיה ונפתור יחד הכל', 3000, 55),
(42, 'זר בלונים', 80, 'זר בלונים מוכן לבחירתכם', 3000, 10),
(43, 'שער בלונים עם משלוח עד הבית', 150, 'שער בלונים ישדרג כל אירוע', 3000, 40),
(44, 'קופון בשווי 400 ש\"ח', 200, 'מה יותר כיף משלם פחות ולהרוויח יותר?', 3000, 34),
(45, 'סידור בלונים אצלכם בבית', 300, 'סידור בחדר לכל מטרה- ימי הולדת, הצעת נישואין ועוד', 3000, 65),
(46, 'הפעלת יום הולדת', 350, 'בלונים בצורות ובצבעים- מיוחד לילדים', 3000, 67);

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `description` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `target` int(7) NOT NULL,
  `collected` int(7) NOT NULL,
  `status` varchar(5) NOT NULL,
  `link` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `projects`
--

INSERT INTO `projects` (`id`, `name`, `views`, `description`, `start_date`, `end_date`, `target`, `collected`, `status`, `link`) VALUES
(1, 'Rustico', 397, 'מסעדת RUSTICO בתל אביב היא בית לחגיגת השמחות הגדולות או הקטנות באווירה חגיגית, משולבת באוכל מצוין וא', '2020-12-01', '2020-12-22', 22000, 15400, 'open', '	\r\nRustico'),
(2, 'לחם יין', 0, 'לחם יין\" נפתחה ב-1999 ומאז ועד היום המסעדה הפכה לשם דבר באזור בקעת אונו ומחוצה לו.\r\n\r\nמייסדות המקום,', '2021-01-05', '2021-01-26', 30000, 30000, 'close', NULL),
(3, 'ספא קיסר', 0, 'בקיסריה, בלב אחוזה קסומה, המוקפת גן פורח וגובלת בחורשת אקליפטוסים, הרחק משאון העיר ועשן המכוניות ובמ', '2020-12-13', '2021-01-24', 25000, 25000, 'close', NULL),
(4, 'Edval', 46, 'כמו שאתם יודעים, אנחנו כאן בשביל להגן על היקר לכם מכל- ומבקשים להשאר.\r\nהעסק שלנו מושתת על עקרונות של', '2020-10-01', '2020-10-15', 100000, 92000, 'open', 'Edval'),
(5, 'בוטיק קטן בכפר', 81, 'לפני כשנתיים הגשמנו חלום, פתחנו בוטיק קטן, אופנטי ואיניטימי בכפר אוריה. לפתע נאלצנו לחדול מעשייה ולס', '2020-09-06', '2020-09-20', 20000, 12000, 'open', 'boutique'),
(6, 'Belle Spa', 55, 'המילה \"ספא\" מקורה בביטוי הלטיני \"sanus per aquam,\" שפירושו – בריאות דרך המים.\r\nהשורשים של בתי הספא ה', '2020-12-16', '2020-12-30', 100000, 85000, 'open', 'belleSpa'),
(7, 'Loren', 47, 'בימים האחרונים מצאנו את עצמנו במצב האחרון בו אנחנו מעוניינים להיות, מתקשרים לספקים ומבקשים שיתחשבו ב', '2020-06-07', '2020-06-21', 70000, 42000, 'open', 'loren'),
(8, 'Tyles Hair Braiding', 50, 'אנחנו היינו כאן בשבילכם עבור כל אירוע וחגיגה וכעת מבקשים את סיועכם כדי להיות שם בשבילכם בכל עת.', '2021-01-17', '2021-01-24', 40000, 28000, 'open', 'TylesHair'),
(9, 'פלאפל בריבוע', 200, 'הסיפור שלנו מתחיל ב 1995 בבחור צעיר בשם גיא יקר, היום מנכ\"ל הרשת, אז – חייל משוחרר עם חלום וחזון לעש', '2021-01-28', '2021-03-07', 100000, 85000, 'open', '	\r\nfalafelbaribua'),
(10, 'גרפיקאית אושרת', 62, 'היי, אני אושרת, הבעלים של סטודיו אושרת אברהם. והתשוקה שלי היא עיצוב גרפי ומיתוג עסקי.', '2021-01-28', '2021-02-15', 100000, 47000, 'open', 'TylesHair'),
(11, 'KB ballon', 40, 'רשת חנויות הבלונים של ישראל טומנת בחובה תפיסה חדשה וייחודית, אשר מעניקה לרוכשי הבלונים והמתנות בישרא', '2021-03-01', '2021-03-22', 300000, 60000, 'open', '	\r\nballoon');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `stores`
--

CREATE TABLE `stores` (
  `bn_number` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `bank_account` int(8) NOT NULL,
  `branch_number` int(3) NOT NULL,
  `bank_number` int(2) NOT NULL,
  `interest` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `stores`
--

INSERT INTO `stores` (`bn_number`, `name`, `city`, `phone_number`, `bank_account`, `branch_number`, `bank_number`, `interest`, `area`) VALUES
(1, 'Rustico', 'תל אביב', 30000001, 1, 100, 12, 'מסעדות', 'מרכז'),
(2, 'פלאפל בריבוע', 'חיפה', 30000002, 1, 100, 12, 'מסעדות', 'צפון'),
(3, 'קנזס בורגר בר', 'באר שבע', 30000003, 3, 100, 12, 'מסעדות', 'דרום'),
(4, 'רק סושי', 'הוד השרון', 30000004, 4, 100, 12, 'מסעדות', 'מרכז'),
(5, 'המקסיסקני', 'ראשון לציון', 30000005, 5, 100, 12, 'מסעדות', 'מרכז'),
(6, 'גארדן בלב המושבה', 'חיפה', 30000006, 6, 100, 12, 'מסעדות', 'צפון'),
(7, 'Uno', 'תל אביב', 30000007, 7, 100, 12, 'מסעדות', 'מרכז'),
(8, 'Caffe Plus', 'תל אביב', 30000008, 8, 100, 12, 'מסעדות', 'מרכז'),
(9, 'דרבי בר', 'בת ים', 30000009, 9, 100, 12, 'מסעדות', 'מרכז'),
(10, 'Lauren', 'נתניה', 30000010, 10, 100, 12, 'מסעדות', 'מרכז'),
(11, 'בוטיק קטן בכפר', 'כפר אוריה', 30000011, 11, 100, 12, 'אופנה', 'מרכז'),
(12, 'Tyles Hair Braiding', 'באר שבע', 30000012, 12, 100, 12, 'טיפוח', 'דרום'),
(13, 'Edval', 'נתניה', 30000013, 13, 100, 12, 'טכנולוגיה', 'מרכז'),
(14, 'Belle Spa', 'חיפה', 30000014, 14, 100, 12, 'טיפוח', 'צפון');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `interest` varchar(30) NOT NULL,
  `area` varchar(30) DEFAULT NULL,
  `is_admin` int(1) DEFAULT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `first_name`, `last_name`, `gender`, `interest`, `area`, `is_admin`, `id`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 'admin', 'admin', 'נ', 'מסעדות', 'מרכז', 1, 1),
('Aviad', 'fcea920f7412b5da7be0cf42b8c93759', 'aviad@gmail.com', 'אביעד', 'קיסוס', 'ז', 'טכנולוגיה', 'מרכז', NULL, 2),
('Aviv', 'fcea920f7412b5da7be0cf42b8c93759', 'aviv@gmail.com', 'אביב', 'ראובן', 'ז', 'מסעדות', 'מרכז', NULL, 3),
('bar', 'acb7a9cbbd0e79289cf341796e2f1ff4', 'r@gm.com', 'מאיר', 'אדוני', 'ז', 'מסעדות', 'מרכז', NULL, 4),
('Carmel', 'fcea920f7412b5da7be0cf42b8c93759', 'carmel@gmail.com', 'כרמל', 'אבידן', 'נ', 'טיפוח', 'צפון', NULL, 5),
('Chen', 'fcea920f7412b5da7be0cf42b8c93759', 'Chen@gmail.com', 'חן', 'אביטל', 'נ', 'מסעדות', 'מרכז', NULL, 6),
('edenka', 'fcea920f7412b5da7be0cf42b8c93759', 'edenka120@gmail.com', 'עדן', 'כחלון', 'נ', 'אופנה', 'מרכז', NULL, 7),
('lielEli', 'd14f040b17022b26e93b399abc7e1df9', 'liel@eli.com', 'ליאל', 'אלי', 'נ', 'מסעדות', 'מרכז', NULL, 8),
('liranko', 'fcea920f7412b5da7be0cf42b8c93759', 'liran@ko.com', 'לירן', 'קוהנר', 'נ', 'טיפוח', 'מרכז', NULL, 9),
('mar', '59d6eadf223e82c9ba1968f507814d97', 'sd@gmail.com', 'מאי', 'הילל', 'ז', 'מסעדות', 'מרכז', NULL, 10),
('marga', 'fcea920f7412b5da7be0cf42b8c93759', 'mar@gmail.com', 'מרגריטה', 'אופנגיים', 'f', 'מסעדות', 'מרכז', NULL, 11),
('marina', 'b83fb75e3d1da4f83b7a8a7fe1c78103', 'r@gm.com', 'תקווה', 'גדעון', 'נ', 'מסעדות', 'מרכז', NULL, 12),
('Naor', 'fcea920f7412b5da7be0cf42b8c93759', 'naor@gmail.com', 'נאור', 'יקים', 'ז', 'טיפוח', 'דרום', NULL, 13),
('Omer', 'fcea920f7412b5da7be0cf42b8c93759', 'omer@gmail.com', 'עומר', 'ירון', 'ז', 'מסעדות', 'מרכז', NULL, 14),
('shani', 'c5fe25896e49ddfe996db7508cf00534', 'shanilv@mta.ac.il', 'שני', 'לוי', 'נ', 'טכנולוגיה', 'מרכז', NULL, 15),
('Shir', 'fcea920f7412b5da7be0cf42b8c93759', 'shir@gmail.com', 'שיר', 'יהלום', 'נ', 'מסעדות', 'צפון', NULL, 16),
('Shira', 'fcea920f7412b5da7be0cf42b8c93759', 'shira@gmail.com', 'שירה', 'מוסקוביץ', 'נ', 'מסעדות', 'דרום', NULL, 17),
('Tomer', 'fcea920f7412b5da7be0cf42b8c93759', 'tomer@gmail.com', 'תומר', 'לוי', 'ז', 'מסעדות', 'דרום', NULL, 18),
('user', '92562396a665289baebc145fdea070d7', 'user@gmail.com', 'משתמש', 'מערכת', 'ז', 'מסעדות', 'מרכז', NULL, 19),
('Yael', 'fcea920f7412b5da7be0cf42b8c93759', 'yael@gmail.com', 'יעל', 'גורן', 'נ', 'אופנה', 'מרכז', NULL, 20),
('Yamit', 'fcea920f7412b5da7be0cf42b8c93759', 'yamit@gmail.com', 'ימית', 'שרון', 'נ', 'מסעדות', 'מרכז', NULL, 21),
('yaniv', 'fcea920f7412b5da7be0cf42b8c93759', 'yaniv@gmail.com', 'יניב', 'אדרי', 'ז', 'טכנולוגיה', 'צפון', NULL, 22);

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`ID`);

--
-- אינדקסים לטבלה `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`bn_number`);

--
-- אינדקסים לטבלה `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `bn_number` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
