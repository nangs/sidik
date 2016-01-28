$(function() {

    $('.ajax-link').click(function(e) {

        e.preventDefault();

        if ($('#tt').tabs('exists', this.text)) {
            $('#tt').tabs('select', this.text);
        }

        else {
            $('#tt').tabs('add',{
                title: this.text, href: this.href, closable: true,
            });
        }

    });

});

var openDialog = function(dialog, title, href, form, dg) {
    $(dialog).dialog({
        title: title, href: href, modal: true, maximizable: true,
        collapsible: true, resizable: true, width: 500,
        buttons: [{
            text: 'Save', iconCls: 'icon-save',
            handler: function() {
                $(form).form('submit', {
                    onSubmit: function(){
                        return $(this).form('validate');
                    },
                    success: function(result){

                        var result = eval('('+result+')');

                        if (result.success == true){
                            $(dialog).dialog('close');
                            $(dg).datagrid('reload');
                        }

                        $.messager.show({
                            title: result.success == true ? 'Success' : 'Error',
                            msg: result.message, timeout:3000,
                            style:{right:'', bottom:''}
                        });

                    }
                });
            }
        }, {
            text: 'Cancel', iconCls: 'icon-cancel',
            handler: function() {$(dialog).dialog('close');}
        }]
    }).dialog('center');
};

var deleteRow = function(url, dg, token) {
    $.messager.confirm('Confirm', 'Apakah Anda yakin akan menghapus data ini?', function(r) {

        if (r) {
            $.ajax({
                url : url, method: 'DELETE', data: {'_token': token}, dataType: 'json',
                success: function(result) {

                    if (result.success == true) {
                        $(dg).datagrid('reload');
                    }

                    $.messager.show({
                        title: result.success == true ? 'Success' : 'Error',
                        msg: result.message, timeout:3000,
                        style:{right:'', bottom:''}
                    });

                }
            });
        }
    });
};
