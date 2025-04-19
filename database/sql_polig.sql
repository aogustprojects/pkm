CREATE TABLE IF NOT EXISTS `setting_poli_gigi` (
    `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `max_registrations` INT NOT NULL DEFAULT 8,
    `is_form_open` TINYINT(1) NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data
INSERT INTO `setting_poli_gigi` (`id`, `max_registrations`, `is_form_open`, `created_at`, `updated_at`) 
VALUES (1, 8, 1, '2025-04-17 13:12:04', '2025-04-17 13:44:45');