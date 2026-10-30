var express = require('express');
var _ = require('lodash');
var app = express();
var orders = [{ id: 1, total: 20 }, { id: 2, total: 35 }];
app.get('/orders', function (req, res) { res.json(_.sortBy(orders, 'total')); });
app.listen(process.env.PORT || 3000);
