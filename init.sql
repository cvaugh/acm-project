USE acm_project;

CREATE TABLE recipes (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(512) NOT NULL,
    description TEXT,
    category VARCHAR(256),
    servings INT,
    url VARCHAR(512),
    source VARCHAR(256) NOT NULL,
    cuisine VARCHAR(128),
    PRIMARY KEY(id)
);

CREATE TABLE ingredients (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(512) NOT NULL,
    vegan BOOL DEFAULT 0,
    gluten BOOL DEFAULT 0,
    PRIMARY KEY(id)
);

CREATE TABLE recipe_ingredients (
    recipe_id INT UNSIGNED NOT NULL,
    ingredient_id INT UNSIGNED NOT NULL,
    quantity DOUBLE NOT NULL DEFAULT 1,
    optional BOOL DEFAULT 0,
    CONSTRAINT fk_recipe_id FOREIGN KEY(recipe_id) REFERENCES recipes(id),
    CONSTRAINT fk_ingredient_id FOREIGN KEY(ingredient_id) REFERENCES ingredients(id)
);
