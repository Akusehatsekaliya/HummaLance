//fix dropdown error
$("nav .dropdown").each(function (index, el) {
  $(el).on("click", function () {
    $(el).find(".dropdown-toggle").dropdown('toggle');
  });
});

$.fn.AjaxDataTable = function (config) {
  const {
    options,
    onCreate,
    onEdit,
    onDelete,
    ajax,
    columns,
    drawCallback
  } = config;
  const {
    modal: createModal,
    text: createText,
    className: createClassName,
    onSuccess: createSuccess,
    createButton: createButton
  } = onCreate || {};
  const {
    modal: editModal,
    onClick: editOnClick,
    onError: editOnError,
    onSuccess: editSuccess
  } = onEdit || {};
  const {
    modal: deleteModal,
    onClick: deleteOnClick,
    onSuccess: deleteSuccess
  } = onDelete || {};
  let firstLoad = true;
  var editUrl = editModal?.find("form").attr("action");
  var deleteUrl = deleteModal?.find("form").attr("action");

  $.fn.dataTable.ext.buttons.create = {
    text: createText,
    className: `${createClassName} createButton`,
    async: 100,
    action: async () => createModal?.modal("show"),
  };

  const table = this.DataTable({
    ajax,
    columns,
    processing: true,
    serverSide: true,
    createdRow: (row) => $(row).hide().fadeIn(1000),
    ...options,
    drawCallback: () => {
      if (firstLoad) {
        firstLoad = false;
        $(this).find("tbody").hide().fadeIn(750);
      }
      drawCallback?.();
    },
  });

  const handleFormSubmit = (modal, url, onSuccess, onError) => {
    modal?.find("form").submit(function (e) {
      e.preventDefault();
      const form = $(this);
      form.find(`button[type="submit`).prop("disabled", true);
      const actionUrl = form.attr('action');
      const formData = new FormData(this);

      $.ajax({
        type: "POST",
        url: actionUrl || url,
        data: formData,
        contentType: false,
        processData: false,
        error: onError,
        complete: () => {
          modal.modal("hide");
          form.find(`button[type="submit`).prop("disabled", false);
        },
        success: (response) => {
          onSuccess?.(response);
          table.draw(false);
        }
      });
    });
  };

  // table.on("click", "button.delete", function () {
  //   const row = $(this).closest("tr");
  //   const { id } = table.row(row).data();
  //   const formData = new FormData();
  //   formData.append("_method", "DELETE");

  //   const doDelete = () => {
  //     row.find("button").prop("disabled", true);
  //     row.fadeOut(1000, function () {
  //       $(this).remove();
  //     });
  //     $.ajax(deleteUrl?.replace(":id:", id), {
  //       type: "POST",
  //       data: formData,
  //       contentType: false,
  //       processData: false,
  //       success: (response) => {
  //         deleteSuccess?.(response);
  //         table.draw(false);
  //       },
  //     });
  //   };
  //   deleteOnClick?.(doDelete);
  // });
  table.on("click", "button.delete", function () {
    // const data = table.row($(this).closest("tr")).data();
    const row = $(this).closest("tr");
    const data = table.row(row).data();
    const { id } = data;
    deleteModal.find("form").attr("action", deleteUrl?.replace(":id:", id));
    deleteOnClick?.(deleteModal.find("form"), data);
    deleteModal.modal("toggle");
    // $("button.delete").prop("disabled", true);
  });

  table.on("click", "button.edit", function () {
    const data = table.row($(this).closest("tr")).data();
    const { id } = data;
    editModal.find("form [name]").not('[type="file"]').not('[name^="_"]').each(function () {
      $(this).val(data[$(this).attr("name")].replace(/&lt;/g, '<').replace(/&gt;/g, '>'));
    });
    editModal.find("form").attr("action", editUrl?.replace(":id:", id));
    editOnClick?.(editModal.find("form"), data);
    editModal.modal("toggle");
  });

  handleFormSubmit(createModal, null, (data) => {
    createSuccess?.();
    table.draw(false);
  });

  handleFormSubmit(deleteModal, null, (data) => {
    // $("button.delete").prop("disabled", false);
    table.draw(false);
  });

  handleFormSubmit(editModal, null, editSuccess, editOnError);

  this.table = table;
  return this;
};
