document.addEventListener('DOMContentLoaded', function () {
    // const rows = document.querySelectorAll('tr.tree-grid-view:not(.depth-indent)');

    // rows.forEach(row => {
    //     const toggle = document.createElement('i');
    //     toggle.classList.add('fas', 'fa-chevron-down', 'toggle');
    //     row.firstElementChild.prepend(toggle);

    //     toggle.addEventListener('click', function () {
    //         const isCollapsed = toggle.classList.toggle('fa-chevron-right');
    //         toggle.classList.toggle('fa-chevron-down', !isCollapsed);
    //         let nextRow = row.nextElementSibling;
    //         while (nextRow && nextRow.classList.contains('depth-indent')) {
    //             nextRow.style.display = isCollapsed ? 'none' : 'table-row';
    //             nextRow = nextRow.nextElementSibling;
    //         }
    //     });
    // });
    const rows = document.querySelectorAll('tr.tree-grid-view:not(.depth-indent)');

    rows.forEach(row => {
        const toggle = document.createElement('span');
        toggle.classList.add('toggle');
        row.firstChild.prepend(toggle);

        toggle.addEventListener('click', function () {
            const isCollapsed = toggle.classList.toggle('collapsed');
            let nextRow = row.nextElementSibling;
            while (nextRow && nextRow.classList.contains('depth-indent')) {
                nextRow.style.display = isCollapsed ? 'none' : 'table-row';
                nextRow = nextRow.nextElementSibling;
            }
        });
    });
});