<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210103164705 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert RENAME INDEX uniq_320ed90152afcfd6 TO UNIQ_D57C02D252AFCFD6');
        $this->addSql('ALTER TABLE concert_band DROP FOREIGN KEY FK_94287428D0C1FC64');
        $this->addSql('DROP INDEX IDX_94287428D0C1FC64 ON concert_band');
        $this->addSql('ALTER TABLE concert_band DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE concert_band CHANGE show_id concert_id INT NOT NULL');
        $this->addSql('ALTER TABLE concert_band ADD CONSTRAINT FK_ED62962C83C97B2E FOREIGN KEY (concert_id) REFERENCES concert (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_ED62962C83C97B2E ON concert_band (concert_id)');
        $this->addSql('ALTER TABLE concert_band ADD PRIMARY KEY (concert_id, band_id)');
        $this->addSql('ALTER TABLE concert_band RENAME INDEX idx_9428742849abeb17 TO IDX_ED62962C49ABEB17');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE concert RENAME INDEX uniq_d57c02d252afcfd6 TO UNIQ_320ED90152AFCFD6');
        $this->addSql('ALTER TABLE concert_band DROP FOREIGN KEY FK_ED62962C83C97B2E');
        $this->addSql('DROP INDEX IDX_ED62962C83C97B2E ON concert_band');
        $this->addSql('ALTER TABLE concert_band DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE concert_band CHANGE concert_id show_id INT NOT NULL');
        $this->addSql('ALTER TABLE concert_band ADD CONSTRAINT FK_94287428D0C1FC64 FOREIGN KEY (show_id) REFERENCES concert (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_94287428D0C1FC64 ON concert_band (show_id)');
        $this->addSql('ALTER TABLE concert_band ADD PRIMARY KEY (show_id, band_id)');
        $this->addSql('ALTER TABLE concert_band RENAME INDEX idx_ed62962c49abeb17 TO IDX_9428742849ABEB17');
    }
}
