<table>
    <tbody>
        <tr>
            <td>Tahun Ajaran</td>
            <td>
                : {!! Form::text('tahun_ajaran', $psb->tahun_ajaran, ['class' => 'easyui-textbox', 'data-options' => 'required:true']) !!}
            </td>
        </tr>
        <tr>
            <td>Jenjang</td>
            <td>
                : {!! Form::text('jenjang', $psb->jenjang, ['class' => 'easyui-textbox', 'data-options' => 'required:true']) !!}
            </td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td>
                : {!! Form::text('tingkat', $psb->tingkat, ['class' => 'easyui-textbox', 'data-options' => 'required:true']) !!}
            </td>
        </tr>
    </tbody>
</table>
