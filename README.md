# ACM Project

Brandon, Candace, Chase, Coleton, James, Jasmine, Yasmeen

## To Do

- [ ] Recipe list
- [ ] Ingredients and quantity
- [ ] Barcode scanner for inventory
- [ ] Sort by:
  - Recipe name
  - Cuisine
  - Number of people served
  - Number of ingredients?
  - Rating
- [ ] Search
- [ ] Expiration date?
- [ ] Categories
- [ ] Show vegan, gluten-free, etc
- [ ] Rating system
- [ ] Recommendations/feedback?
- [ ] Recipe scaling
- [ ] User-submitted recipes

## Database

### `recipes` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `id` | `INT UNSIGNED` | `NOT NULL`, `AUTO_INCREMENT` |  |
| `name` | `VARCHAR(512)` | `NOT NULL` |  |
| `description` | `TEXT` | |  |
| `category` | `VARCHAR(256)` | |  |
| `servings` | `INT` | |  |
| `url` | `VARCHAR(512)` | |  |
| `source` | `VARCHAR(256)` | `NOT NULL` |  |
| `cuisine` | `VARCHAR(128)` |  |  |

Primary key: `id`

### `ingredients` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `id` | `INT UNSIGNED` | `NOT NULL`, `AUTO_INCREMENT` |  |
| `name` | `VARCHAR(512)` | `NOT NULL` |  |
| `vegan` | `BOOL` | `DEFAULT 0` |  |
| `gluten` | `BOOL` | `DEFAULT 0` |  |

Primary key: `id`

## `recipe-ingredients` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `recipe_id` | `INT UNSIGNED` | `NOT NULL` | `recipes.id` |
| `ingredient_id` | `INT UNSIGNED` | `NOT NULL` | `ingredients.id` |
| `quantity` | `DOUBLE` | `NOT NULL`, `DEFAULT 1` |  |
| `optional` | `BOOL` | `DEFAULT 0` |  |

### `ratings` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `id` | `INT UNSIGNED` | `NOT NULL`, `AUTO_INCREMENT` |  |
| (to do) |  |  |  |

Primary key: `id`

## Docker Development Environment

Ensure that you have the required [Docker](https://www.docker.com/) images installed:

```
docker pull php
docker pull mysql
```

Use the following command to start a Docker container for the project:

```
docker-compose up -d

```

If `setup.sql` has been modified, stop the container and run the following command to update the database schema:

```
docker-compose build --no-cache

```
