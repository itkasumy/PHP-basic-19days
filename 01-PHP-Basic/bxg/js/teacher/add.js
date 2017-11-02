/**
 * Created by lisha on 2017/9/12.
 */
define(['jquery', 'text!tpls/teacherAdd.html', 'template'], function ($, teacherAddTpl, template) {
    return function (callback) {

        var $html = $(teacherAddTpl);
        $html.appendTo('body').
            modal().
            on('hidden.bs.modal', function () {
                $(this).remove()
            }).
            on('submit', 'form', function (e) {
                console.log($(this).serialize());
                e.preventDefault();

                var formData = $(this).serialize();
                //console.log(formData)
                $.ajax({
                    url: '/api/teacher/add',
                    type: 'post',
                    data: formData,
                    success: function (data) {
                        //if(data.code!=200) throw new Error(data.msg);
                        $html.modal('hide');
                        //console.log(data.code);
                        $('.aside  .list-group a').first().trigger('click');
                        //callback();
                    }
                })
                //$('.aside  .list-group a').first().trigger('click');
            })
    }
})
