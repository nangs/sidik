<div id="toolbar-psb">
    <a href="/psb1/create/" class="easyui-linkbutton add-psb" iconCls="icon-add" plain="true">Tambah</a>
    <a href="/psb1/edit/" class="easyui-linkbutton edit-psb" iconCls="icon-edit" plain="true" data-options="disabled:true">Edit</a>
    <a href="/psb1/delete/" class="easyui-linkbutton delete-psb" iconCls="icon-remove" plain="true" data-options="disabled:true">Hapus</a>
    {!! Form::select('aksi', App\Psb::aksiList(), null, ['class' => 'easyui-combobox', 'style' => 'width:200px']) !!}
    <a class="easyui-linkbutton tombol-aksi" plain="true" iconCls="icon-ok">Submit</a>
    <input type="text" name="nama" class="easyui-searchbox" data-options="prompt:'Ketik nama calon santri',searcher:doSearch" style="width:200px" />
</div>

<table id="dg-psb" style="height:450px"></table>
<div id="dialog-psb" style="padding:10px;"></div>
<div id="show-psb" style="padding:10px;"></div>

<script type="text/javascript">

    $('#dg-psb').datagrid({
        border: false, fit: true, pagination: true, rownumbers: true, striped: true,
        fitColumns: true, singleSelect: true, toolbar: '#toolbar-psb',
        pageSize: 15, pageList: [15,20,30,40,50], url: '/psb1/data', method: 'GET',
        columns:[[
            {field: 'calon_siswa.nama', title: 'Nama Calon Santri', sortable: true, formatter: function(val, row) {
                return row.nama;
            }},

            {field: 'calon_siswa.nis', title: 'NIS', sortable: true, formatter: function(val, row) {
                return row.nis;
            }},

            {field: 'calon_siswa.jenis_kelamin', title: 'JK', sortable: true, formatter: function(val, row) {
                return row.jenis_kelamin == 1 ? 'L' : 'P';
            }},

            {field: 'jenjang', title: 'Jenjang', sortable: true, formatter: function(val, row) {
                return row.jenjangText;
            }},

            {field: 'tingkat', title: 'Tingkat', sortable: true, formatter: function(val, row) {
                return row.tingkatText;
            }},

            {field: 'tanggal_daftar', title: 'Tanggal Daftar', sortable: true},

            {field: 'intern', title: 'Intern', sortable: true, formatter: function(val, row) {
                return row.jenis_kelamin == 1 ? 'Y' : 'T';
            }},

            {field: 'status_pembayaran', title: 'Pembayaran', sortable: true, formatter: function(val, row) {
                return row.status_pembayaran == 0
                    ? '<span class="fa fa-square-o"></span>'
                    : '<span class="fa fa-check-square-o"></span>';
            }, align: 'center'},

            {field: 'status_formulir', title: 'Formulir', sortable: true, formatter: function(val, row) {
                return row.status_formulir == 0
                    ? '<span class="fa fa-square-o"></span>'
                    : '<span class="fa fa-check-square-o"></span>';
            }, align: 'center'},

            {field: 'status_test', title: 'Test', sortable: true, formatter: function(val, row) {
                return row.status_test == 0
                    ? '<span class="fa fa-square-o"></span>'
                    : '<span class="fa fa-check-square-o"></span>';
            }, align: 'center'},

            {field: 'status_wawancara', title: 'Wawancara', sortable: true, formatter: function(val, row) {
                return row.status_wawancara == 0
                    ? '<span class="fa fa-square-o"></span>'
                    : '<span class="fa fa-check-square-o"></span>';
            }, align: 'center'},

            {field: 'status_wawancara_ortu', title: 'Wawancara Orang Tua', sortable: true, formatter: function(val, row) {
                return row.status_wawancara_ortu == 0
                    ? '<span class="fa fa-square-o"></span>'
                    : '<span class="fa fa-check-square-o"></span>';
            }, align: 'center'},

            {field: 'status_penerimaan', title: 'Diterima', sortable: true, formatter: function(val, row) {
                if (row.status_penerimaan == 1) {
                    return '<span class="fa fa-check-square-o"></span>';
                } else if (row.status_penerimaan == 2) {
                    return '<span class="fa fa-remove"></span>';
                } else {
                    return '<span class="fa fa-square-o"></span>';
                }
            }, align: 'center'},
        ]],
        onSelect: function(index, row) {
            $('.edit-psb, .delete-psb').linkbutton({disabled: false});
        },
        onLoadSuccess: function(data) {
            $('.edit-psb, .delete-psb').linkbutton({disabled: true});
        },
        onDblClickRow: function(inedx, row) {
            $('#show-psb').dialog({
                title: row.nama, href: '/psb1/'+row.id, modal: true,
                maximizable: true, collapsible: true, resizable: true, width: 960,
            }).dialog('center');
        }
    });

    function doSearch(){
        $('#dg-psb').datagrid('load',{
            nama: $('[name="nama"]').val(),
        });
    }

    $('.delete-psb').click(function(e) {
        e.preventDefault();
        var row = $('#dg-psb').datagrid('getSelected');
        if (!row) { return; }
        deleteRow('/psb1/'+row.id, '#dg-psb', '{!! csrf_token() !!}');
    });

    $('.add-psb').click(function(e) {
        e.preventDefault();
        openDialog('#dialog-psb', 'Tambah', this.href, '#form-psb', '#dg-psb');
    });

    $('.edit-psb').click(function(e) {
        e.preventDefault();
        var row = $('#dg-psb').datagrid('getSelected');
        if (!row) {return;}
        var href = '/psb1/' + row.id + '/edit';
        openDialog('#dialog-psb', 'Edit', href, '#form-psb', '#dg-psb');
    });

    $('.tombol-aksi').click(function(e) {

        e.preventDefault();
        var url = $('[name=aksi]').val();
        var row = $('#dg-psb').datagrid('getSelected');
        if (!row) {return;}
        var url = url + row.id;

        $.messager.confirm('Confirm', 'Apakah Anda yakin?', function(r) {

            if (r) {
                $.ajax({
                    url: url, type: 'GET', dataType: 'json',
                    success: function(result) {
                        if (result.success == true) {
                            $('#dg-psb').datagrid('reload');
                        } else {
                            $.messager.show({
                                title: 'Error', msg: result.message, timeout:3000,
                                style:{right:'', bottom:''}
                            });
                        }
                    }
                });
            }

        });

    });

</script>
