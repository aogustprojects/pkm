--
-- File generated with SQLiteStudio v3.4.17 on Mon May 26 10:02:59 2025
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: pegawais
CREATE TABLE IF NOT EXISTS "pegawais" ("id" integer primary key autoincrement not null, "nama" varchar not null, "nip" varchar not null, "golongan" varchar, "tmt_golongan" date, "jabatan" varchar, "tmt_jabatan" date, "tmt_cpns" date, "tmt_pns_pppk" date, "pendidikan" varchar, "tahun_lulus" integer, "tmt_mutasi" date, "tgl_lahir" date, "umur" integer, "status_perkawinan" varchar check ("status_perkawinan" in ('Menikah', 'Belum Menikah')), "photo_url" varchar, "created_at" datetime, "updated_at" datetime, "touched_at" datetime);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
