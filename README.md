# TreeGridView

TreeGridView is a Yii2 GridView extension that provides a tree-like structure with collapsible rows.

## Features

- Display data in a tree structure.
- Collapsible rows for better organization of hierarchical data.
- Intuitive icons for expanding/collapsing rows.

## Installation

You can install the package using Composer. Add the package to your project with the following command:

```sh
composer require jambtc/yii2-tree-grid-view "dev-main"
```

## Usage

```php
use jambtc\TreeGridView;
use yii\data\ArrayDataProvider;

// Create a data provider (example with ArrayDataProvider)
$dataProvider = new ArrayDataProvider([
    'allModels' => [
        ['id' => 1, 'name' => 'Root', 'depth' => 0],
        ['id' => 2, 'name' => 'Child 1', 'depth' => 1],
        // Add more data as needed
    ],
    'key' => 'id',
]);

// Display the TreeGridView widget
echo TreeGridView::widget([
    'dataProvider' => $dataProvider,
    'depthColumn' => 'depth', // Specify the depth column
    'columns' => [
        'id',
        'name',
        // Add more columns as needed
    ],
]);
```
