<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210103164227 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert_band DROP FOREIGN KEY FK_94287428D0C1FC64');
        $this->addSql('CREATE TABLE `show` (id INT AUTO_INCREMENT NOT NULL, hall_id INT NOT NULL, date DATE NOT NULL, tour_name VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_320ED90152AFCFD6 (hall_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE show_band (show_id INT NOT NULL, band_id INT NOT NULL, INDEX IDX_94287428D0C1FC64 (show_id), INDEX IDX_9428742849ABEB17 (band_id), PRIMARY KEY(show_id, band_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `show` ADD CONSTRAINT FK_320ED90152AFCFD6 FOREIGN KEY (hall_id) REFERENCES hall (id)');
        $this->addSql('ALTER TABLE show_band ADD CONSTRAINT FK_94287428D0C1FC64 FOREIGN KEY (show_id) REFERENCES `show` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE show_band ADD CONSTRAINT FK_9428742849ABEB17 FOREIGN KEY (band_id) REFERENCES band (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE concert');
        $this->addSql('DROP TABLE concert_band');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE show_band DROP FOREIGN KEY FK_94287428D0C1FC64');
        $this->addSql('CREATE TABLE concert (id INT AUTO_INCREMENT NOT NULL, hall_id INT NOT NULL, date DATE NOT NULL, tour_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_320ED90152AFCFD6 (hall_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE concert_band (show_id INT NOT NULL, band_id INT NOT NULL, INDEX IDX_9428742849ABEB17 (band_id), INDEX IDX_94287428D0C1FC64 (show_id), PRIMARY KEY(show_id, band_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE concert ADD CONSTRAINT FK_320ED90152AFCFD6 FOREIGN KEY (hall_id) REFERENCES hall (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE concert_band ADD CONSTRAINT FK_9428742849ABEB17 FOREIGN KEY (band_id) REFERENCES band (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE concert_band ADD CONSTRAINT FK_94287428D0C1FC64 FOREIGN KEY (show_id) REFERENCES concert (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('DROP TABLE `show`');
        $this->addSql('DROP TABLE show_band');
    }
}
