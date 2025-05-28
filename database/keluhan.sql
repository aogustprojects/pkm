--
-- File generated with MySQL
--

START TRANSACTION;

-- Table: keluhans
CREATE TABLE IF NOT EXISTS `keluhans` (
    `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `asal_keluhan` VARCHAR(255) NOT NULL,
    `nama_pengirim` VARCHAR(255) NOT NULL,
    `email_pengirim` VARCHAR(255),
    `perihal` VARCHAR(255) NOT NULL,
    `isi_pesan` TEXT NOT NULL,
    `created_at` DATETIME,
    `updated_at` DATETIME
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;