(()=>{function a(a,e,t){return e in a?Object.defineProperty(a,e,{value:t,enumerable:!0,configurable:!0,writable:!0}):a[e]=t,a}$(document).ready((function(){var e;$("#basic-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}});var t=$("#datatable-buttons").DataTable((a(e={lengthChange:!1,buttons:["copy","print","pdf"]},"buttons",[{extend:"copy",className:"btn-light"},{extend:"print",className:"btn-light"},{extend:"pdf",className:"btn-light"}]),a(e,"language",{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}}),a(e,"drawCallback",(function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")})),e));$("#selection-datatable").DataTable({select:{style:"multi"},language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#key-datatable").DataTable({keys:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),t.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$("#alternative-page-datatable").DataTable({pagingType:"full_numbers",drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#scroll-vertical-datatable").DataTable({scrollY:"350px",scrollCollapse:!0,paging:!1,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#scroll-horizontal-datatable").DataTable({scrollX:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}}),$("#complex-header-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")},columnDefs:[{visible:!1,targets:-1}]}),$("#row-callback-datatable").DataTable({language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")},createdRow:function(a,e,t){1*e[5].replace(/[\$,]/g,"")>15e4&&$("td",a).eq(5).addClass("text-danger")}}),$("#state-saving-datatable").DataTable({stateSave:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}})}))})();