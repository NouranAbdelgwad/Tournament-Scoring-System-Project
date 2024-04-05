-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 11:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournament_scoring_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Admin_ID` bigint(20) UNSIGNED NOT NULL,
  `Admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `College_ID` bigint(20) NOT NULL,
  `Event_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Admin_ID`, `Admin_name`, `Admin_email`, `Admin_password`, `College_ID`, `Event_ID`, `created_at`, `updated_at`) VALUES
(1, 'Nouran Abdelgwad', 'nouran@gmail.com', '*4A90DEB34118C1F7A6BBE2D37188095C0C8EA6C4', 12345, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `college_members`
--

CREATE TABLE `college_members` (
  `College_member_ID` bigint(20) UNSIGNED NOT NULL,
  `College_ID` bigint(20) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `college_members`
--

INSERT INTO `college_members` (`College_member_ID`, `College_ID`, `Name`, `created_at`, `updated_at`) VALUES
(1, 12345, 'Nouran', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Event_ID` bigint(20) UNSIGNED NOT NULL,
  `Tournament_ID` bigint(20) UNSIGNED NOT NULL,
  `Event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Max_number_of_teams` bigint(20) NOT NULL,
  `Max_number_of_individuals` bigint(20) NOT NULL,
  `Event_type` enum('sporting','academic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Participation_type` enum('teams','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events_update`
--

CREATE TABLE `events_update` (
  `Event_ID` bigint(20) UNSIGNED NOT NULL,
  `Tournament_ID` bigint(20) UNSIGNED NOT NULL,
  `Event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rules` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Scoring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Excitement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_URL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Max_number_of_teams` bigint(20) NOT NULL,
  `Max_number_of_individuals` bigint(20) NOT NULL,
  `Event_type` enum('sporting','academic') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Participation_type` enum('teams','individual') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events_update`
--

INSERT INTO `events_update` (`Event_ID`, `Tournament_ID`, `Event_name`, `Format`, `location`, `Duration`, `Rules`, `Scoring`, `Excitement`, `img_URL`, `Start_date`, `End_date`, `Description`, `Max_number_of_teams`, `Max_number_of_individuals`, `Event_type`, `Participation_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Slam Dunk Showdown', '5 vs 5 full-court basketball games', 'State-of-the-art college basketball court', 'Each game will consist of two halves, with each half lasting 20 minutes.', 'Teams will compete in a roundrobin format to determine the top teams for the knockout stage.<br>\nPlayers must demonstrate their agility, shooting accuracy, teamwork, and strategic gameplay to outscore their opponents.\nReferees will enforce fair play, foul', '- Points will be awarded based on baskets scored, with additional points for three-pointers and free throws.\r\n- Teams will earn points towards their overall tournament score based on their performance and final standings in the basketball event', '- Spectators can expect high-flying dunks, fast breaks, precision passes, and intense defensive plays as teams battle it out on the court.\r\n- The basketball event promises to deliver thrilling moments, buzzer-beaters, and displays of athleticism that will', 'https://cdn.pixabay.com/photo/2022/04/09/15/10/basketball-7121617_1280.jpg', '2024-03-20', '2024-03-22', '', 4, 0, 'sporting', 'teams', '2024-03-15 11:01:29', NULL),
(2, 1, 'Ace Challenge', 'Singles and Doubles Matches', 'Professional tennis courts with state-of-the-art facilities', 'Matches will be played in a best-of three sets format.', '- Participants will compete in singles matches for individual glory and doubles matches for team success.\r\n- Players must demonstrate their agility, precision, powerful serves, and strategic play to outmaneuver their opponents.\r\n- Umpires will oversee mat', '- Points will be awarded based on games won in each set and sets won in each match.\r\n- Participants will earn points towards their overall tournament score based on their performance and final standings in the tennis event.', '- Spectators can expect intense rallies, powerful serves, delicate drop shots, and impressive volleys as players battle it out on the court.\r\n- The tennis event promises to deliver nail-biting tie-breakers, strategic shot-making, and displays of finesse t', 'https://cdn.pixabay.com/photo/2021/06/04/06/54/racket-6308994_1280.jpg', '2024-03-19', '2024-03-20', 'In the singles matches, participants will compete individually against their opponents to showcase their skills and claim victory. Players will aim to outplay their opponents in a one-on-one setting to earn points for their individual performance.', 0, 20, 'sporting', 'individual', '2024-03-15 11:07:03', NULL),
(4, 1, 'Volley Clash Tournament', 'Teams of 5 players each', 'Indoor volleyball court with professional equipment', 'Matches will be played in a best-of-five sets format.', '- Teams will compete in a double-elimination tournament format, with each match consisting of exciting sets of volleyball action.\r\n- Players must showcase their serving, spiking, blocking, and teamwork skills to outperform their opponents and secure victo', '- Points will be awarded based on sets won in each match, with additional points for match victories and set differentials.\r\n- Teams will earn points towards their overall tournament score based on their performance and final standings in the Volley Clash', '- Spectators can expect thrilling rallies, powerful spikes, strategic blocks, and dynamic teamwork as teams clash on the court.\r\n- The Volley Clash Tournament promises to deliver intense matches, close sets, and displays of athleticism that will keep the ', 'https://media.istockphoto.com/id/1473259144/photo/volleyball-ball-and-net-in-voleyball-arena-during-a-match.jpg?s=612x612&w=0&k=20&c=vbn1S1xDKY7XO5lGdR14FCLhHkWXcjoS49j4-Cc1Ukg=', '2024-03-19', '2024-03-20', '-', 4, 0, 'sporting', 'teams', '2024-03-15 11:39:22', NULL),
(5, 1, 'Sprint Challenge', 'Individual sprint races', 'Professional track and field facility with electronic timing', 'Races will vary in distance from 100 meters to 400 meters.\r\n', '- Participants will compete in sprint races against each other, showcasing their speed, acceleration, and technique on the track.\r\n- Runners must demonstrate their explosive starts, efficient stride patterns, and strong finishes to secure victory in each ', '- Points will be awarded based on race placements, with additional points for achieving personal best times and breaking records.\r\n- Participants will earn points towards their overall tournament score based on their performance and final standings in the', '- Spectators can expect lightning-fast sprints, neck-to-neck finishes, and exhilarating displays of speed and athleticism as runners compete for glory.\r\n- The Sprint Challenge event promises to deliver thrilling races, photo finishes, and moments of pure ', 'https://media.istockphoto.com/id/1423897577/photo/athletes-at-race-starting-line-ready-to-run.jpg?s=612x612&w=0&k=20&c=yXvaMz6RbkUOhNjdM1yJEyQZdNuX0b8VBX4AKQ6wgoU=', '2024-03-19', '2024-03-20', '- ', 0, 20, 'sporting', 'individual', '2024-03-14 22:00:00', NULL),
(6, 1, 'Handball Showdown', 'Teams of 5 players each', 'Indoor handball court with official markings', 'Matches will consist of two halves, each lasting 30 minutes.', 'Teams will compete in a handball tournament with a league and knockout format to determine the champions. Players must showcase passing, shooting, defending, and teamwork skills to outmaneuver opponents and score goals.', 'Points will be awarded based on goals scored during matches, with additional points for wins and draws.\r\nTeams will earn points towards their overall tournament score based on their performance and final standings in the Handball Showdown event.', '- Spectators can expect fast-paced action, skillful plays, strategic setups, and dynamic team coordination as teams battle it out on the handball court.\r\n- The Handball Showdown event promises to deliver intense matches, close scores, and thrilling moment', 'https://cdn.pixabay.com/photo/2017/02/27/11/16/sports-2102965_1280.jpg', '2024-03-19', '2024-03-21', '- ', 4, 0, 'sporting', 'teams', '2024-03-14 22:00:00', NULL),
(8, 1, 'Handball Skills Challenge', 'Individual skill-based challenges', 'Indoor handball court with designated skill stations', 'Participants will rotate through different skill challenges.', 'Participants will showcase their handball skills in various challenges such as shooting accuracy, passing accuracy, dribbling speed, and goalkeeper saves.Each challenge will test a specific aspect of handball technique and athleticism.\nJudges', 'Points will be awarded based on performance in each skill challenge, with higher scores indicating better proficiency in the respective skill. Participants will earn points towards their overall tournament score based on their cumulative perform', 'Participants and spectators can enjoy a display of individual talent, precision, and agility as players demonstrate their handball skills in a series of challenging tasks.\nThe Handball Skills Challenge event promises to showcase the diverse talents', 'https://cdn.pixabay.com/photo/2021/04/01/18/48/woman-6143052_1280.jpg', '2024-03-19', '2024-03-22', '- ', 0, 20, 'sporting', 'individual', '2024-03-15 11:53:03', NULL),
(9, 1, 'Quiz Bowl Championship', 'Teams of 5 members each', 'Auditorium with buzzers and multimedia setup', 'Rounds will consist of timed questions and answers.', '- Teams will compete in a quiz bowl format with questions covering a wide range of academic subjects.\r\nParticipants must demonstrate their knowledge, quick thinking, and teamwork to buzz in and provide correct answers.\r\n- Moderators will ask questions, en', '- Points will be awarded for correct answers, with additional points for bonus questions and successful challenges.\r\n- Teams will earn points towards their overall tournament score based on their performance and final standings in the Quiz Bowl Championsh', '- Spectators can expect fast-paced questioning, strategic buzzer tactics, intense competition, and displays of academic prowess.\r\n- The Quiz Bowl Championship promises to deliver thrilling rounds, close scores, and intellectual challenges that will engage', 'https://images.pexels.com/photos/207756/pexels-photo-207756.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2024-03-20', '2024-03-22', '- ', 4, 0, 'academic', 'teams', '0000-00-00 00:00:00', '2024-03-14 22:00:00'),
(10, 1, 'Research Symposium', 'Individual research presentations\r\n', 'Conference hall with presentation equipment', 'Participants will present their research findings', 'Participants will present their research findings.', '- Participants will present their research projects or studies on various academic topics to a panel of judges and audience members.\r\n- Presentations must be well-structured, informative, and engaging to effectively communicate the research findings.\r\n- J', '- The Research Symposium offers a platform for participants to showcase their academic research, innovative ideas, and passion for learning.\r\n- Audience members can expect insightful presentations, thought-provoking discussions, and a celebration of acade', 'https://cdn.pixabay.com/photo/2017/08/01/00/38/man-2562325_1280.jpg', '2024-03-20', '2024-03-21', '- ', 0, 20, 'academic', 'individual', '2024-03-15 12:12:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `individuals`
--

CREATE TABLE `individuals` (
  `Individual_ID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tournament_ID` bigint(20) UNSIGNED NOT NULL,
  `Event_ID` bigint(20) UNSIGNED NOT NULL,
  `college_ID` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Score` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Member_ID` bigint(20) UNSIGNED NOT NULL,
  `Team_ID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_collge_ID` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, 'create_tournaments_table', 2),
(6, 'create_super_admins_table', 3),
(7, 'college_members', 4),
(8, 'events', 5),
(9, 'teams', 6),
(10, 'create_members_table', 7),
(11, 'create_individuals_table', 8),
(12, 'create_admins_table', 9),
(13, 'members', 10),
(14, 'events_update', 11),
(15, 'admins_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `Super_admin_ID` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `Team_ID` bigint(20) UNSIGNED NOT NULL,
  `Team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tournament_ID` bigint(20) UNSIGNED NOT NULL,
  `Event_ID` bigint(20) UNSIGNED NOT NULL,
  `Team_leader_college_ID` bigint(20) NOT NULL,
  `Status` enum('accepted','rejected','winner') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Score` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `Tournament_ID` bigint(20) UNSIGNED NOT NULL,
  `Tournament_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Max_number_of_teams` bigint(20) NOT NULL,
  `Max_number_of_individuals` bigint(20) NOT NULL,
  `Status` enum('canceled','ongoing','scheduled','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prizes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rules_and_regulations` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`Tournament_ID`, `Tournament_name`, `Description`, `Start_date`, `End_date`, `Max_number_of_teams`, `Max_number_of_individuals`, `Status`, `Prizes`, `Rules_and_regulations`, `created_at`, `updated_at`) VALUES
(1, 'VersaQuest: The Ultimate Collegiate Challenge', 'Are you ready to showcase your skills and compete for glory? Look no further! Our cutting-edge scoring system is here to revolutionize the way you participate in tournaments.', '2024-03-18', '2024-03-20', 4, 20, 'scheduled', '1st place: 200$ _ \n2nd place: 100$ _ \n3rd place: 50$', '- Participants can enter as individuals or form teams.\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD UNIQUE KEY `admins_college_id_unique` (`College_ID`),
  ADD KEY `admins_event_id_foreign` (`Event_ID`);

--
-- Indexes for table `college_members`
--
ALTER TABLE `college_members`
  ADD PRIMARY KEY (`College_member_ID`),
  ADD UNIQUE KEY `college_members_college_id_unique` (`College_ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `events_tournament_id_foreign` (`Tournament_ID`);

--
-- Indexes for table `events_update`
--
ALTER TABLE `events_update`
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `events_update_tournament_id_foreign` (`Tournament_ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `individuals`
--
ALTER TABLE `individuals`
  ADD PRIMARY KEY (`Individual_ID`),
  ADD UNIQUE KEY `individuals_college_id_unique` (`college_ID`),
  ADD KEY `individuals_tournament_id_foreign` (`Tournament_ID`),
  ADD KEY `individuals_event_id_foreign` (`Event_ID`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `members_member_collge_id_unique` (`member_collge_ID`),
  ADD KEY `members_team_id_foreign` (`Team_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`Super_admin_ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`Team_ID`),
  ADD UNIQUE KEY `teams_tournament_id_unique` (`Tournament_ID`),
  ADD UNIQUE KEY `teams_event_id_unique` (`Event_ID`),
  ADD UNIQUE KEY `teams_team_leader_college_id_unique` (`Team_leader_college_ID`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`Tournament_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Admin_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `college_members`
--
ALTER TABLE `college_members`
  MODIFY `College_member_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Event_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events_update`
--
ALTER TABLE `events_update`
  MODIFY `Event_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individuals`
--
ALTER TABLE `individuals`
  MODIFY `Individual_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `Member_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `Super_admin_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `Team_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `Tournament_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_college_id_foreign` FOREIGN KEY (`College_ID`) REFERENCES `college_members` (`College_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admins_event_id_foreign` FOREIGN KEY (`Event_ID`) REFERENCES `events_update` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_tournament_id_foreign` FOREIGN KEY (`Tournament_ID`) REFERENCES `tournaments` (`Tournament_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events_update`
--
ALTER TABLE `events_update`
  ADD CONSTRAINT `events_update_tournament_id_foreign` FOREIGN KEY (`Tournament_ID`) REFERENCES `tournaments` (`Tournament_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `individuals`
--
ALTER TABLE `individuals`
  ADD CONSTRAINT `individuals_college_id_foreign` FOREIGN KEY (`College_ID`) REFERENCES `college_members` (`College_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `individuals_event_id_foreign` FOREIGN KEY (`Event_ID`) REFERENCES `events` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `individuals_tournament_id_foreign` FOREIGN KEY (`Tournament_ID`) REFERENCES `tournaments` (`Tournament_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_member_collge_id_foreign` FOREIGN KEY (`member_collge_ID`) REFERENCES `college_members` (`College_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_team_id_foreign` FOREIGN KEY (`Team_ID`) REFERENCES `teams` (`Team_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_event_id_foreign` FOREIGN KEY (`Event_ID`) REFERENCES `events_update` (`Event_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teams_team_leader_college_id_foreign` FOREIGN KEY (`Team_leader_college_ID`) REFERENCES `college_members` (`College_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teams_tournament_id_foreign` FOREIGN KEY (`Tournament_ID`) REFERENCES `tournaments` (`Tournament_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
