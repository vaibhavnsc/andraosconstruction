

<?php $__env->startSection('content'); ?>
<div class="leads-section py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 py-4 rounded" style="margin-top: 100px;">
                <h2 class="text-center fw-bold mb-1">Leads Management</h2>
                <p class="text-center mb-0">All form submissions in real-time</p>
                <div class="text-center mt-2">
                    <span class="badge bg-success" id="live-indicator">Live</span>
                    <small class="ms-2" id="last-updated">Updated: --</small>
                </div>
            </div>
        </div>

        <div class="table-responsive bg-white rounded shadow-sm border">
            <table class="table table-hover align-middle mb-0" id="leads-table">
                <thead>
                    <tr>
                        <th scope="col" class="ps-4">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Scope of Work</th>
                        <th scope="col">Approx. Size</th>
                        <th scope="col">Message</th>
                        <th scope="col">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td class="ps-4"><?php echo e($lead->id); ?></td>
                            <td class="fw-semibold"><?php echo e($lead->full_name); ?></td>
                            <td><?php echo e($lead->company); ?></td>
                            <td><a href="mailto:<?php echo e($lead->email); ?>" class="text-decoration-none"><?php echo e($lead->email); ?></a></td>
                            <td><?php echo e($lead->phone); ?></td>
                            <td><span class="badge bg-primary"><?php echo e($lead->scope); ?></span></td>
                            <td><?php echo e($lead->approx_size); ?></td>
                            <td class="text-muted small"><?php echo e(mb_substr($lead->message ?? '', 0, 60)); ?></td>
                            <td class="whitespace-nowrap"><?php echo e(\Carbon\Carbon::parse($lead->created_at)->format('M d, Y h:i A')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="9" class="text-center py-5 text-muted">No leads found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3" id="leads-pagination">
            <button type="button" class="btn btn-outline-secondary btn-sm" id="prev-page" disabled>Previous</button>
            <span class="text-muted small" id="page-info"></span>
            <button type="button" class="btn btn-outline-secondary btn-sm" id="next-page">Next</button>
        </div>
    </div>
</div>

<style>
    .leads-section {
        min-height: 70vh;
        margin: top 50px;
    }

    .leads-section h2 {
        font-family: 'Inter', sans-serif;
        color: #1a1a1a;
    }
    #leads-table thead th {
        font-weight: 600;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.03em;
        background-color: #010d1f;
        color: #fff;
    }
    #leads-table tbody td {
        font-size: 0.9rem;
        vertical-align: middle;
    }
    #leads-table tbody tr {
        transition: background-color 0.15s ease;
    }
    #leads-table tbody tr:hover {
        background-color: #f8f9fa;
    }
    .new-row {
        animation: highlight 2s ease;
    }
    @keyframes highlight {
        0% { background-color: #d1e7dd; }
        100% { background-color: transparent; }
    }
    #live-indicator {
        animation: pulse 2s infinite;
    }
    @keyframes pulse {
        0% { opacity: 1; }
        50% { opacity: 0.5; }
        100% { opacity: 1; }
    }
    .whitespace-nowrap {
        white-space: nowrap;
    }

</style>

<script>
    (function() {
        const REFRESH_INTERVAL = 5000;
        const tableBody = document.querySelector('#leads-table tbody');
        const lastUpdated = document.getElementById('last-updated');
        const prevBtn = document.getElementById('prev-page');
        const nextBtn = document.getElementById('next-page');
        const pageInfo = document.getElementById('page-info');

        let currentPage = 1;
        let lastPage = 1;

        async function fetchLeads(page) {
            try {
                const url = new URL('<?php echo e(url("/leads-data")); ?>', window.location.origin);
                url.searchParams.set('page', page || currentPage);
                const response = await fetch(url.toString(), {
                    headers: { 'Accept': 'application/json' }
                });
                if (!response.ok) return;
                const payload = await response.json();
                const leads = payload.data || [];
                const meta = payload.meta || {};
                renderTable(leads);
                if (meta.current_page) {
                    currentPage = meta.current_page;
                    lastPage = meta.last_page || 1;
                    renderPagination();
                }
                if (lastUpdated) {
                    const now = new Date();
                    lastUpdated.textContent = 'Updated: ' + now.toLocaleTimeString();
                }
            } catch (e) {
                console.error('Lead refresh failed:', e);
            }
        }

        function renderTable(leads) {
            if (!tableBody) return;
            const existingIds = new Set();
            tableBody.querySelectorAll('tr').forEach(row => {
                const idCell = row.querySelector('td:first-child');
                if (idCell) existingIds.add(idCell.textContent.trim());
            });

            const newIds = new Set(leads.map(l => String(l.id)));
            let html = '';

            if (leads.length === 0) {
                html = '<tr><td colspan="9" class="text-center py-5 text-muted">No leads found.</td></tr>';
            } else {
                leads.forEach(lead => {
                    const isNew = !existingIds.has(String(lead.id));
                    const rowClass = isNew ? 'new-row' : '';
                    html += `
                        <tr class="${rowClass}">
                            <td class="ps-4">${lead.id}</td>
                            <td class="fw-semibold">${lead.full_name}</td>
                            <td>${lead.company}</td>
                            <td><a href="mailto:${lead.email}" class="text-decoration-none">${lead.email}</a></td>
                            <td>${lead.phone}</td>
                            <td><span class="badge bg-primary">${lead.scope}</span></td>
                            <td>${lead.approx_size}</td>
                            <td class="text-muted small">${lead.message ? lead.message.replace(/<[^>]*>/g, '').substring(0, 60) : ''}</td>
                            <td class="whitespace-nowrap">${formatDate(lead.created_at)}</td>
                        </tr>
                    `;
                });
            }

            tableBody.innerHTML = html;
        }

        function renderPagination() {
            if (!pageInfo || !prevBtn || !nextBtn) return;
            pageInfo.textContent = 'Page ' + currentPage + ' of ' + (lastPage || 1);
            prevBtn.disabled = currentPage <= 1;
            nextBtn.disabled = currentPage >= lastPage;
        }

        function formatDate(dateStr) {
            if (!dateStr) return '';
            const d = new Date(dateStr);
            if (isNaN(d.getTime())) return dateStr;
            const months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
            return months[d.getMonth()] + ' ' + String(d.getDate()).padStart(2,'0') + ', ' + d.getFullYear() + ' ' + d.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        }

        if (prevBtn) prevBtn.addEventListener('click', () => { if (currentPage > 1) { currentPage--; fetchLeads(currentPage); } });
        if (nextBtn) nextBtn.addEventListener('click', () => { if (currentPage < lastPage) { currentPage++; fetchLeads(currentPage); } });

        fetchLeads(currentPage);
        setInterval(() => fetchLeads(currentPage), REFRESH_INTERVAL);
    })();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH I:\CRN\andraosconstruction\resources\views/pages/leads.blade.php ENDPATH**/ ?>