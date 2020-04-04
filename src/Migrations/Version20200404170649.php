<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200404170649 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE personnage CHANGE password password VARCHAR(255) NOT NULL, CHANGE argent argent INT NOT NULL, CHANGE RACE_id RACE_id INT DEFAULT NULL, CHANGE CLASSE_id CLASSE_id INT DEFAULT NULL, CHANGE ARMURE_id ARMURE_id INT DEFAULT NULL, CHANGE ARME_id ARME_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE race CHANGE sante sante INT NOT NULL, CHANGE `force` `force` INT NOT NULL, CHANGE magie magie INT NOT NULL, CHANGE defense defense INT NOT NULL, CHANGE attaque attaque INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE personnage CHANGE password password VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, CHANGE argent argent INT DEFAULT NULL, CHANGE ARME_id ARME_id INT NOT NULL, CHANGE ARMURE_id ARMURE_id INT NOT NULL, CHANGE CLASSE_id CLASSE_id INT NOT NULL, CHANGE RACE_id RACE_id INT NOT NULL');
        $this->addSql('ALTER TABLE race CHANGE sante sante INT DEFAULT NULL, CHANGE `force` `force` INT DEFAULT NULL, CHANGE magie magie INT DEFAULT NULL, CHANGE defense defense INT DEFAULT NULL, CHANGE attaque attaque INT DEFAULT NULL');
    }
}
