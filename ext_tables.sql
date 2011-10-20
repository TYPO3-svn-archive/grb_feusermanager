CREATE TABLE fe_users (
	tx_grbfeusermanager_language varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_birthday varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_nickname varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_professional varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_company_street varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_company_zip varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_company_city varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_would_newsletter varchar(255) DEFAULT '' NOT NULL,
	tx_grbfeusermanager_agrees_agb varchar(255) DEFAULT '' NOT NULL,
);