'use strict';

const tableName = '#usersTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: recordsURL,
    },
    columnDefs: [
        {
            'targets': [3],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'DT_RowIndex', name: 'DT_RowIndex' , orderable: false, searchable: false
        },{
            data: 'name',
            name: 'name'
        },{
            data: 'email',
            name: 'email'
        },{
            data: 'password',
            name: 'password',
            orderable: false, 
            searchable: false
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#usersTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    const recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'User');
});
