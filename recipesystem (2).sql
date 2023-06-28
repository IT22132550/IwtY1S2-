-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 07:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `Admin_ID` char(30) NOT NULL,
  `Admin_name` varchar(30) NOT NULL,
  `AdminEmail` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`Admin_ID`, `Admin_name`, `AdminEmail`, `Password`) VALUES
('A1', 'Admin1', 'admin1@example.com', 'f865b53623b121fd34ee5426c792e5c33af8c227'),
('A2', 'Admin2', 'admin2@example.com', '0c6f6845bb8c62b778e9147c272ac4b5bdb9ae71'),
('A3', 'Admin3', 'admin3@example.com', '5ce515b49f71f1b920224a289541faa3d77d1fed'),
('A4', 'Admin4', 'admin4@example.com', '74913f5cd5f61ec0bcfdb775414c2fb3d161b620'),
('A5', 'Admin5', 'admin5@example.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `fname`, `lname`, `tel`, `text`) VALUES
(1, '', '', '', ''),
(2, 'wd', 'wd', 'wd', 'fr');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Faq_ID` int(11) NOT NULL,
  `Questions` text NOT NULL,
  `Answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Feedback_ID` char(30) NOT NULL,
  `User_ID` char(30) NOT NULL,
  `Feedbacktext` text NOT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_ID` char(30) NOT NULL,
  `User_ID` char(30) NOT NULL,
  `Card_Type` varchar(30) DEFAULT NULL,
  `Card_Name` varchar(150) NOT NULL,
  `Expiray_Date` date DEFAULT NULL,
  `CVV` int(11) DEFAULT NULL,
  `Card_Number` varchar(50) DEFAULT NULL,
  `Amount` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_ID`, `User_ID`, `Card_Type`, `Card_Name`, `Expiray_Date`, `CVV`, `Card_Number`, `Amount`) VALUES
('P1', 'U1', 'Visa', 'Nisal _G', '2023-12-06', 670, '4716564992768814', 0),
('P2', 'U2', 'MasterCard', 'Thimin_G', '2023-10-12', 780, '2720936696629336', 0),
('P3', 'U3', 'American Express', 'Sahan_K', '2023-12-30', 980, '372014694195919', 0),
('P4', 'U4', 'Visa', 'Udula_S', '2023-12-25', 120, '4539776509607617', 0),
('P5', 'U5', 'MasterCard', 'Salani_J', '2023-11-06', 230, '5591724136761797', 0),
('payment_64853f62bdadb', 'U1', 'Visa', 'dasd', '0000-00-00', 0, 'asdasd', 0),
('payment_64854be4368ed', 'U1', 'visa', 'Udula Thattaya', '2023-06-12', 363, '5555-5555-5555-4444', 600),
('payment_64854cce136d0', 'U1', 'visa', 'Udula Thadiya', '2023-06-13', 363, '5555-5555-5555-4444', 600),
('payment_64854e15567ee', 'U1', 'visa', 'Nisal _G', '2023-06-06', 350, '5555-5555-5555-4444', 600),
('payment_64854f6781dbf', 'U1', 'visa', 'Nisal _G', '2023-06-14', 350, '5555-5555-5555-4444', 600),
('payment_64855074788ea', 'U1', 'visa', 'ewqeeqw', '2023-05-02', 350, '5555-5555-5555-4444', 600),
('payment_6485549b8bf93', 'U1', 'visa', 'assdadasd', '2023-06-14', 350, '5555-5555-5555-4444', 600),
('payment_6485744ec8fac', 'U1', 'visa', 'dsfads', '2023-06-04', 350, '5555-5555-5555-4444', 600),
('payment_648587b779b52', 'U1', 'american_express', 'sdasd', '2023-06-14', 350, '5555-5555-5555-4444', 600),
('payment_649917afc07b0', 'U1', 'visa', 'sdadsadasd', '2023-06-12', 350, '5555-5555-5555-4444', 0),
('payment_64991843baa04', 'U1', 'visa', 'pasddas', '2023-06-12', 350, '5555-5555-5555-4444', 0),
('payment_6499b6d05e2aa', 'U1', 'visa', 'dasdasdsasda', '2023-06-06', 350, '5555-5555-5555-4444', 0),
('payment_6499b743224e9', 'U1', 'visa', 'day', '2023-06-05', 350, '1111-2222-3333-4444', 0),
('payment_6499b9737c7ce', 'U1', 'visa', 'gf', '2023-06-13', 350, '1111-2222-3333-4444', 0),
('payment_6499b9a2e4bcc', 'U1', 'visa', 'Udula Thadiya', '2023-06-12', 350, '1111-2222-3333-4444', 0),
('payment_6499ba435e85d', 'U1', 'visa', 'Udula Thadiya', '2023-06-21', 350, '1111-2222-3333-4444', 0),
('payment_6499bb878cd24', 'U1', 'visa', 'sadsdasda', '2023-06-15', 350, '1111-2222-3333-4444', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `Recipe_ID` char(30) NOT NULL,
  `User_ID` char(30) DEFAULT NULL,
  `Recipe_Name` varchar(100) NOT NULL,
  `Ingredients` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Instructions` text NOT NULL,
  `Category` varchar(50) NOT NULL,
  `RatingRecipe` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `imageUrl` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Recipe_ID`, `User_ID`, `Recipe_Name`, `Ingredients`, `Description`, `Instructions`, `Category`, `RatingRecipe`, `price`, `imageUrl`) VALUES
('R1', 'U1', 'Pasta Carbonara', '1.Spaghetti \r\n2.Bacon \r\n3.Eggs\r\n4.Parmesan Cheese\r\n5.Black Pepper', 'Classic Italian pasta dish with creamy sauce', '1. Cook spaghetti according to package instructions.\r\n2. Fry bacon until crispy. \r\n3. Whisk eggs and cheese in a bowl.\r\n4. Drain cooked pasta and toss with bacon.\r\n5. Add egg mixture and toss until coated. 6. Season with black pepper.\r\n7. Serve hot.', 'Italian', 4, 0.00, 'https://food-images.files.bbci.co.uk/food/recipes/danilos_foolproof_75042_16x9.jpg'),
('R2', 'U2', 'Chicken Stir-Fry', '1.Chicken Breast\r\n2.Bell Peppers\r\n3.Onion \r\n4.Soy Sauce\r\n5.Ginger\r\n6. Garlic', 'Quick and easy stir-fry recipe with tender chicken', '1. Heat oil in a pan and cook chicken until browned.\r\n2. Add sliced bell peppers and onion.\r\n3. Stir-fry for a few minutes.\r\n4. In a small bowl, mix soy sauce, ginger, and garlic. \r\n5. Pour the sauce over the chicken and vegetables. \r\n6. Stir-fry for another minute. \r\n7. Serve hot with rice.', 'Asian', 4, 600.00, 'data:image/jpeg;base64,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'),
('R3', 'U3', 'Cheeseburger', '1.Ground Beef \r\n2.Hamburger Buns\r\n3.Cheese \r\n4.Lettuce \r\n5.Tomato \r\n6.Onion', 'Classic American burger with melted cheese', '1. Shape ground beef into patties.\r\n2. Grill or cook patties in a pan until desired doneness. \r\n3. Toast hamburger buns. \r\n4. Place cooked patties on the buns.\r\n5. Add cheese, lettuce, tomato, and onion. 6. Serve with ketchup and mustard', 'American', 5, 777.00, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASEhUSEhIWFRUXFxcXGRcVFxYXGRUaFxUXGBgXFRcYHSghGBsmHhMVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lICYtLS03LTArLy0tMC0tLS0tLS0tLS0tLSs1LS0vLS0tLS0tNS0tLS0tLS0tLSstLS0tLf/AABEIALABHgMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcCAQj/xAA/EAACAQICBgcFBgQGAwAAAAAAAQIDEQQhBQYSMUFREyIyYXGBsQeRocHwFCNCctHhM0NSYkSCksLS8RZUY//EABoBAQADAQEBAAAAAAAAAAAAAAACAwQBBQb/xAAoEQEAAgEEAQQCAQUAAAAAAAAAAQIDBBESMSETFEFRImEyBZGx4fD/2gAMAwEAAhEDEQA/AO4gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABjr14wW1JpLv+sxM7DIeZzSV20lzeRrWkdZJZqlG390t/kv1NZxuJqVHecnJ979FuRkyaulevLXj0l7d+G74rWPC099TafKCcvisviU+K15prsUZS/M1H0uahWIs0+ZmtrbT01V0VI7bPW19rfhpU147UvRoh1NfcXwVJf5ZfORrc7mCZD3V/tZGlx/TZnr9jFwp/6H/wAj7H2j4pb6dJ+U1/uNSqJkeaJRqb/bk6bH9OhYf2mr+Zh/OE/k4/Mt8F7QcBPKUp0n/fG/xg5fE5BUiYZFtdTZTbSU+H6GwOk6FZXpVYVPyyTt4pZoln5tjVlFpptNbmsmvBmyaG1+xtBpSn00F+Gpm/KfaT8b+BorqIntnvpbR07cDV9XNecJi2oX6Kq/wT4vlCW6Xhk+42gviYnpmmsxO0gAOuAAAAAAAAAAAAAAAAAAAAAAAfJOyuBgxmKVNXeb4Lmaxjak6jvJ39F4Fnibzk5P/pEWpSPNz5JvO0dN+CkU8/KmqUCLVol3UpGCpRMc1bIuoZ0CLVpF7WpEGvSK5hZFlNOmRp0y3qUu4j1YJBLdT1YMwuBY1IGGVEluK+pSME4FnUpEeVMlEoyrpUjFKJZypmGdItiVcoFjoOpOvs6bjQxcnKnujVecoctt/ij3713rdpKoH1US2mWazvCq+OLxtL9FxkmrrNM+mhezLTcpReEqPsLapt/08YeV1buvyN9PRpeLRvDzL0mltpAATQAAAAAAAAAAAAAAAAAAAMeI7LMhC0rpOjh47Vaaim9lLjJvhFcWct1KVYmZ8MDgYpwGCx9KtHbpyUlez5xfFSXB9xlaPOmGveYnaUSVIjVKZPkRqi9Su0LK2V0qSuRq9BXLLZW0jFWjvKpqui6krUvr9SFUo8S3xESNVhusVcVsXVFWj3GCdDMsZyV/MxSOxU5oFSiYOgLNpbjG4InFZRm6rnSsjD0RbVKZilRSJbOclaqZkpUbknoyVhqSR2ImXJvEJmq1KUMVRkv60vKXVfwbOtHP9T6CniFypxcn49mPq35HQD0dNWYq87UX5WAAaFAAAAAAAAAAAAAAAAAAABzrWqk8bVi6U3am5J7UbRi91oSaXWur3V/Q6KUlZU4Nprc38c/mef8A1HLOPHG3hq0d+GTlHbmeP0NUjh5zVadOcI7VlK14q7UWl2rd/MpdV9dNJUpKnZ4mMpWUZ3cl3xks14O6N00jrRh5VZUo0ZzcXaTjHJd7btl37jzovSWDnJxjNRknnFqz37n8TybarNSIn09/3/0Pb9Wl6TW8ef8ADY9H4jE1afSTo9C1vhJ3bVk7p8N7Wa4csykx+tSovr03k3e1nw35eXxLrC6Ri04QkptZZPdluZrmkNBupHaeV273zW/wKZ1t+X1Hyx0xxMzvDLo7WaNf+EnJq91uaVklZOzfHM9YrTkafVqQmpX5X4b7o12rh4UamzJ2nGzust6TTjy38O8z4iSq9qbfnZ+Zt5zau9VM3rFtphsdGpUqRTjSlZ2u3ZWV9+bXAj4nbh2o2/zKxhw2n8RThsKSklxkrv3pq/nmRdMaf23tSgov86t6Ge86nxtt/b/ZXJX5V+MxE6cn1HJP+nP4FLjdPzk5RoRvKPa2+rbPlK19/oZMdjakl/ESX9m/37zXsXKEc7uTvm3n8WbMEW2/Pt31axPTJT1kxad3aSzyaSJa1xktldC++z9MhoPVz7ZGU+klBXai8pXe9uV96z5o8V9UK1KrsVKicbKSlG62k+afZeTyL7WpSu9l/wCGSfxheaE0v9qlsxp1IvN3kurZZb16GPWPSNXCSSqUk4STtKEr3ta94tJp5/Wdp2jdGxp01BOVr7Xae/muTKrW7SEaSW03KTySbvlzz3IxY9dTJfhSu7tsHHzM+FPiNcp7oUv9TS95ClrVipcUkt+ys7c1dvMoMXPak3a3h6nmF4552/U9euONmG14+H6V9k2IjVwMaqpqLcmnPquVXZy2qmzxvdWdvBG6H5w9jmsVfD42GHT+6xE1GpF5pOzUZLlK7Ub5Xur3srfo80U8RsyX73AASQAAAAAAAAAAAAAAAAAAANe0xh+l6SG04vNJreuRsJrumX0dXa4SSfmsn8jJrKxOPzG8L9P/AD8Od1ND1sLN9NTjKnOcU5xt2VnZ7WSu/rnG0nTpKOzTynVdpNSWx3uzWVnyfBvhY6JVrQqR2JxUlykk0/Ip8Zqlgqr2tlxfDZk/1M1Lw2Taflz2ro2thqf3MqilJpSknJJO17ZWdsnw4H3DY/FUHadWbSvNXcmo3dvvLq7WSty2jatKarV4waoV2u7uVnw52sa5V0Fj6cHCVNzeco7G+7t2r8mrr9kSmKW7gi/7YNJaw160vv4rqrZjKPVurtrrbmt9vO1uMKrpNQ62fLqtZqybfDddeZ7rwxMY9HWoTinvezdvgs1fgk+Gazys1UqcLRg1bZlLtJ2d1nLPjku456NJcnaVxLTL2bxqe9r03kCFd1ZW2k5d7Xz3mPRlKkorbd7y2bJ2td78l3v3d5B0jh4uXaulbO+WWWXL9jkYIQ4R22fC6vVZ5SdlyT/VFjR0LCH4V4vN+81HQel69CbVOs1Hjezj8fC2Rt2i9ZqdXq1Y7Mr2Uo5xl3tb4/E8zWYNVXzWd4/XbZp7YfrysdH2pvqq3hl8Cdi6XSdd5u1iPUa3qzT3Nbn3okUaytZnj5cl5juW6Kx3EK7G4uNKEqkt0Vfx5I5ZpPHzrzc5b3w5LgkbLrTj/tE3CGdOD3rdKSVr+GeXvKjD6Nlv2fC/7H0X9O00Yac7fyl5upyzktxjpUrBt71bK9vRGXAYbbnsLJK7fd++ZbRwdt738uJki4xVoqx6M5fHhmjGz6CUaNei4/hrUpX4vZqRd37j9OH5f0bB1MRRpr8VWnHyc1d+CV35H6cp1oy3Mswb7TKnPtEwyAA0M4AAAAAAAAAAAAAAAAAABXabwLq0+r2o5rv5osSs1i0zTweHniKmagsorfKTdoxXe2/mRvETWYt0lTlyjj207p7ZbmuG5+dzJ9oeWfH6+Zl1fxNHS1GVa0aFeLtKMJOdk84OaaV78+5570oukNCYuim9npI86ebt3x3ryueTfS3jzXzD04zV3438SyLGvLM9Qx+V+/0f6lCser2eTXB5PzTzR8+2xt53+f14mfe1V3Csrurj099sivxKov8ABF3lnl6+SK/7Tn8/NfqY/tWfhd+Z31LOelV5x2jsPK/3cV3pWfk19ZFRiNXqFurdZb7u5YVMR9ef7mCWJurX5L68ycZLOTjhUvVukksn5u5jp6IjB3g2vr1LWviVlb6y/wCyHPEFnqXlD06wlaJrOithu8G72/pb3tfNefjI0vj1s7EHfaybXBPevFlNPEkatiTNOlpbJzlbGSYrxZFGMdyRjq1yHVxS5kKtjUbYrMqJmISq1ch1sQeadKrUfVi2X+htTa9RpyizRTDM9qL56x0x6pQkqyq2zXZ7r5N+NsvM7bq9iZtK5Q6u6lOFm1Y3rAaMjTRrrWKxtDHa02neU2k8jIfEj6dcAAAAAAAAAAAAAAAAAAB5mzQPadhcZXhTp0qblTXSyls5tydGUKatdZXqS8MjoJ8cURtXlGyeO/C0Wj4cS1H0PpHD1+k6CcFsSg9qyUryTSte73XOo4CniWuvZF0qa5HuxzHSKRtCefNOW/KVZidD0aytWpxn4pX9+8pcZqBhZ9idWn+WW0vdJM20HbVrbuFdbWr1Lm2I9nGIX8LFRkv/AKQs/fF2+BV1tQ9Jxvbop96m18GjroKp0+KfhbGoyx8uJ1tUNKr/AA9/yzg/dmQ56r6U/wDUn5Sh/wAjvAOe1x/SXusjgU9VtKP/AAk/fD9Tx/4ZpZ7sM14yifoAHfbY3Pc5HAoezrS0v5cI+M/2JVP2T6Rn26tOPhdncwSjDSPhCc95+XH8L7GX/NxDfhl6F/o72U4KnvvJnQQWRWI6VzaZ7UOC1SwlLs00W9HB049mKRnB1x8SPoAAAAAAAAAAAAf/2Q=='),
('R4', 'U4', 'Vegetable Curry', '1.Assorted Vegetables (Carrots, Potatoes, Cauliflower, Peas)\r\n2.Curry Powder \r\n3.Coconut Milk', 'Flavorful vegetarian curry with a creamy coconut base', '1. Chop vegetables into bite-sized pieces. 2. Heat oil in a pot and sauté vegetables. 3. Add curry powder and cook for a minute. 4. Pour in coconut milk and simmer until vegetables are tender.\r\n5. Season with salt and pepper. \r\n6. Serve hot with rice or naan bread.', 'Indian', 4, 900.00, 'https://simply-delicious-food.com/wp-content/uploads/2020/09/Creamy-vegetable-curry-4.jpg'),
('R5', 'U5', 'Chocolate Brownies', '1.Butter\r\n2.Sugar\r\n3.Eggs\r\n4.Flour\r\n5.Cocoa Powder\r\n6.Chocolate Chips', 'Rich and fudgy chocolate brownies', '1. Melt butter and mix with sugar in a bowl. \r\n2. Beat in eggs. \r\n3. Add flour and cocoa powder, and mix until combined.\r\n4. Fold in chocolate chips. \r\n5. Pour batter into a greased baking pan. 6. Bake at 350°F for 25-30 minutes. \r\n7. Let cool before cutting into squares.', 'Dessert', 5, 500.00, 'https://thebananadiaries.com/wp-content/uploads/2021/08/homemade-chocolate-brownie-ice-cream-vegan_5134.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userId` int(11) NOT NULL,
  `Username` varchar(12) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`userId`, `Username`, `password`, `First_name`, `Last_name`, `email`, `usertype`) VALUES
(5, 'sfdfsdd', 'nnnn', 'DASA', 'SASAS', 'accweb.nistudio@gmail.com', NULL),
(6, 'busal', '1111', 'DASA', 'SASAS', 'udaya@hmail.com', NULL),
(7, 'nisal12', 'nnnn', 'sandeepa', 'gunawardhana', 'nisalsandeepa.officialmail@gmail.com', NULL),
(9, 'dead22437', '12344', 'asda', 'gadf', 'uduladeathstroke@gmail.com', 'freeuser'),
(11, 'papspadimitr', '12345', 'sda', 'asd', 'udithakasun@outlook.com', 'freeuser'),
(12, 'dimipapasad6', '12345', 'ASsa', 'raw', 'gojousatoru026@gmail.com', 'prouser'),
(13, 'papspadimitr', '1234', 'sda', 'sda', '12123@gmail.com', 'prouser');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `User_ID` char(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `DOB` datetime DEFAULT NULL,
  `Gender` varchar(15) DEFAULT NULL,
  `Username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `UserType` enum('Basic_User','Pro_User','Contributor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`User_ID`, `First_Name`, `Last_Name`, `Email`, `DOB`, `Gender`, `Username`, `password`, `UserType`) VALUES
('U1', 'Nisal', 'gunawardhana', 'nisalg@example.com', '1990-01-01 00:00:00', 'Male', 'nisalg2001', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 'Basic_User'),
('U2', 'Thimin', 'godawaththage', 'thiming@example.com', '1985-05-15 00:00:00', 'Male', 'thiming2001', '57b2ad99044d337197c0c39fd3823568ff81e48a', 'Pro_User'),
('U3', 'sahan', 'kuruppu', 'sahank@example.com', '1992-09-20 00:00:00', 'Male', 'sahank', 'ea0c04513c32717f3a09ff7b1fa882c4d8424b2a', 'Contributor'),
('U4', 'udula', 'senavirathna', 'udulas@example.com', '1988-07-08 00:00:00', 'Male', 'udulas', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 'Basic_User'),
('U5', 'salani', 'jayawardhana', 'salej@example.com', '1995-03-12 00:00:00', 'Female', 'saleejj', 'b992c788b2d5e837f0954ce180cee372958003f9', 'Pro_User');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `Video_ID` char(30) NOT NULL,
  `Video_Name` varchar(100) NOT NULL,
  `User_ID` char(30) NOT NULL,
  `Recipe_ID` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Faq_ID`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `fk_Feedbacks` (`User_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_ID`),
  ADD KEY `fk_payment` (`User_ID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`Recipe_ID`),
  ADD KEY `fk_Recipe` (`User_ID`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`Video_ID`),
  ADD KEY `fk_Video1` (`User_ID`),
  ADD KEY `fk_Video2` (`Recipe_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `fk_Feedbacks` FOREIGN KEY (`User_ID`) REFERENCES `useraccount` (`User_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment` FOREIGN KEY (`User_ID`) REFERENCES `useraccount` (`User_ID`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `fk_Recipe` FOREIGN KEY (`User_ID`) REFERENCES `useraccount` (`User_ID`);

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `fk_Video1` FOREIGN KEY (`User_ID`) REFERENCES `useraccount` (`User_ID`),
  ADD CONSTRAINT `fk_Video2` FOREIGN KEY (`Recipe_ID`) REFERENCES `recipe` (`Recipe_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
