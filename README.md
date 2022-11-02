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
| (to do) |  |  |  |

Primary key: `id`

### `ingredients` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `id` | `INT UNSIGNED` | `NOT NULL`, `AUTO_INCREMENT` |  |
| `name` | `VARCHAR(512)` | `NOT NULL` |  |
| `vegan` | `BOOL` | `DEFAULT '0'` |  |
| `gluten` | `BOOL` | `DEFAULT '0'` |  |

Primary key: `id`

## `recipe-ingredients` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `recipe_id` | `INT UNSIGNED` | `NOT NULL` | `recipes.id` |
| `ingredient_id` | `INT UNSIGNED` | `NOT NULL` | `ingredients.id` |
| `optional` | `BOOL` | `DEFAULT '0'` |  |

### `ratings` table

| Column | Type | Extra | Foreign Key |
|--------|------|-------|-------------|
| `id` | `INT UNSIGNED` | `NOT NULL`, `AUTO_INCREMENT` |  |
| (to do) |  |  |  |

Primary key: `id`
