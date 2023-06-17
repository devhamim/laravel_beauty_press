<?php

use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

Breadcrumbs::for('admin.dashboard', fn(Trail $trail) => $trail->push('Dashboard', 'admin.dashboard'));

Breadcrumbs::for('admin.product.product.index', fn(Trail $trail) => $trail->parent('admin.dashboard')->push('Products', 'admin.product.productindex'));

Breadcrumbs::for('admin.product.product.create', fn(Trail $trail) => $trail->parent('admin.product.product.index')->push('Create'));
