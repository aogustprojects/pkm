CREATE TABLE `setting_poli_gigi` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `max_registrations` INT NOT NULL DEFAULT 8,
    `created_at` DATETIME NULL,
    `updated_at` DATETIME NULL
);

INSERT INTO `setting_poli_gigi` (`id`, `max_registrations`, `created_at`, `updated_at`) VALUES
(1, 8, '2025-03-20 09:28:36', '2025-03-20 09:37:39');