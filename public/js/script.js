var delete_id;
function delete_cat(id)
{
    delete_id=id;
    const delete_cat= new bootstrap.Modal(document.getElementById('delete'));
    delete_cat.show();
}

function confirmDelete()
{
    $.ajax({
        url: '/dashboard/categories/deletecat/' + delete_id,
        type: 'Get',

        success:function()
        {
            swal.fire({
                toast: true,
                icon: 'success',
                title: 'تم حذف السجل',
                position:'top-end',
                showConfirmButton: false,
                timer:3000,
                timerProgressBar:true
            });
            location.reload();
        },

        error:function()
        {
            swal.fire({
                toast: true,
                icon: 'error',
                title: 'خطأ في عملية الحذف',
                position:'top-end',
                showConfirmButton: false,
                timer:3000,
                timerProgressBar:true
            });
        }
    });
}

function delete_prod(id)
{
    delete_id=id;
    const delete_cat= new bootstrap.Modal(document.getElementById('delete'));
    delete_cat.show();
}

function confirmDeleteProd()
{
    $.ajax({
        url: '/dashboard/products/deleteprod/' + delete_id,
        type: 'Get',

        success:function()
        {
            swal.fire({
                toast: true,
                icon: 'success',
                title: 'تم حذف السجل',
                position:'top-end',
                showConfirmButton: false,
                timer:3000,
                timerProgressBar:true
            });
            location.reload();
        },

        error:function()
        {
            swal.fire({
                toast: true,
                icon: 'error',
                title: 'خطأ في عملية الحذف',
                position:'top-end',
                showConfirmButton: false,
                timer:3000,
                timerProgressBar:true
            });
        }
    });
}