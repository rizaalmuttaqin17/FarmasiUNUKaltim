/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!********************************************!*\
  !*** ./resources/assets/js/users/users.js ***!
  \********************************************/


var tableName = '#usersTable';
$(tableName).DataTable({
  scrollX: true,
  deferRender: true,
  scroller: true,
  processing: true,
  serverSide: true,
  'order': [[0, 'asc']],
  ajax: {
    url: recordsURL
  },
  columnDefs: [{
    'targets': [3],
    'orderable': false,
    'className': 'text-center',
    'width': '12%'
  }],
  columns: [{
    data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false
  },{
    data: 'name', name: 'name'
  }, {
    data: 'email', name: 'email'
  }, {
    data: function data(row) {
      var url = recordsURL + row.id;
      var data = [{
        'id': row.id,
        'url': url + '/edit',
        'url_show': url
      }];
      return prepareTemplateRender('#usersTemplate', data);
    },
    name: 'id'
  }]
});
$(document).on('click', '.delete-btn', function (event) {
  var recordId = $(event.currentTarget).data('id');
  deleteItem(recordsURL + recordId, tableName, 'User');
});
/******/ })()
;