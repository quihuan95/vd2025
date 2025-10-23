<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Quản lý đăng ký - VDUHSC 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --brand-color-1: #dc3545;
    }

    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .admin-header {
      background: white;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }

    .admin-title {
      color: var(--brand-color-1);
      font-weight: 600;
      margin-bottom: 0.5rem;
    }

    .admin-subtitle {
      color: #6c757d;
      margin-bottom: 0;
    }

    .stat-card {
      background: white;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }

    .stat-icon {
      width: 60px;
      height: 60px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 1rem;
      font-size: 1.5rem;
      color: white;
    }

    .stat-total .stat-icon {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .stat-pending .stat-icon {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }

    .stat-approved .stat-icon {
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .stat-rejected .stat-icon {
      background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
    }

    .stat-content h3 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 0.25rem;
      color: #333;
    }

    .stat-content p {
      margin-bottom: 0;
      color: #6c757d;
      font-weight: 500;
    }

    .admin-toolbar {
      background: white;
      padding: 1.5rem;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }

    .admin-actions {
      display: flex;
      gap: 1rem;
      justify-content: flex-end;
    }

    .admin-table-container {
      background: white;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .admin-table {
      margin-bottom: 0;
    }

    .admin-table thead th {
      background: #f8f9fa;
      border-bottom: 2px solid #dee2e6;
      font-weight: 600;
      color: #495057;
      padding: 1rem;
    }

    .admin-table tbody td {
      padding: 1rem;
      vertical-align: middle;
      border-bottom: 1px solid #f1f3f4;
    }

    .user-info strong {
      color: #333;
    }

    .organization-info strong {
      color: #333;
    }

    .status-badge {
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
    }

    .status-pending {
      background: #fff3cd;
      color: #856404;
    }

    .status-approved {
      background: #d1edff;
      color: #0c5460;
    }

    .status-rejected {
      background: #f8d7da;
      color: #721c24;
    }

    .empty-state {
      padding: 3rem 1rem;
    }

    .btn-group .btn {
      border-radius: 6px;
    }

    @media (max-width: 768px) {
      .admin-header {
        padding: 1.5rem;
      }

      .stat-card {
        padding: 1rem;
      }

      .admin-toolbar {
        padding: 1rem;
      }

      .admin-actions {
        flex-direction: column;
      }

      .table-responsive {
        font-size: 0.875rem;
      }
    }

    /* Results Info */
    .pagination-info {
      text-align: center;
      color: #6c757d;
      font-size: 0.875rem;
      margin-top: 0.75rem;
      font-weight: 500;
    }

    /* Results Wrapper */
    .pagination-wrapper {
      background: #f8f9fa;
      border-radius: 12px;
      padding: 1rem 2rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Loading Overlay CSS removed to avoid form submission conflicts */
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12" style="max-width: 1400px; margin: 2rem; background-color: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <!-- Success/Error Messages -->
        @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        @if(session('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        <!-- Statistics Cards -->
        <div class="row mb-4">
          <div class="col-md-3">
            <div class="stat-card stat-total">
              <div class="stat-icon">
                <i class="fas fa-users"></i>
              </div>
              <div class="stat-content">
                <h3>{{ $registrations->count() }}</h3>
                <p>Tổng đăng ký</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card stat-pending">
              <div class="stat-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="stat-content">
                <h3>{{ $registrations->where('status', 'pending')->count() }}</h3>
                <p>Chờ duyệt</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card stat-approved">
              <div class="stat-icon">
                <i class="fas fa-check"></i>
              </div>
              <div class="stat-content">
                <h3>{{ $registrations->where('status', 'approved')->count() }}</h3>
                <p>Đã duyệt</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card stat-rejected">
              <div class="stat-icon">
                <i class="fas fa-times"></i>
              </div>
              <div class="stat-content">
                <h3>{{ $registrations->where('status', 'rejected')->count() }}</h3>
                <p>Từ chối</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Filters and Actions -->
        <div class="admin-toolbar">
          <form method="GET" class="row g-3 align-items-end">
            <div class="col-md-3">
              <label for="search" class="form-label">Tìm kiếm</label>
              <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}" placeholder="Tên, email, cơ quan...">
            </div>
            <div class="col-md-3">
              <label for="status" class="form-label">Trạng thái</label>
              <select class="form-select" id="status" name="status">
                <option value="">Tất cả</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Chờ duyệt</option>
                <option value="approved" {{ request('status') == 'approved' ? 'selected' : '' }}>Đã duyệt</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Từ chối</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="sort_by" class="form-label">Sắp xếp</label>
              <select class="form-select" id="sort_by" name="sort_by">
                <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Ngày đăng ký</option>
                <option value="full_name" {{ request('sort_by') == 'full_name' ? 'selected' : '' }}>Tên</option>
                <option value="organization" {{ request('sort_by') == 'organization' ? 'selected' : '' }}>Cơ quan</option>
              </select>
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-primary w-100">
                <i class="fas fa-search me-1"></i> Lọc
              </button>
            </div>
            <div class="col-md-2">
            <a href="{{ route('admin.export', request()->query()) }}" class="btn btn-success">
              <i class="fas fa-file-excel me-1"></i> Xuất Excel
            </a>
          </div>
          </form>
        </div>

        <!-- Bulk Actions -->
        <div class="bulk-actions mb-3" style="display: none;">
          <div class="d-flex align-items-center gap-3">
            <span class="text-muted" id="selectedCount">0 đăng ký được chọn</span>
            <div class="dropdown">
              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="bulkActionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Thao tác hàng loạt
              </button>
              <ul class="dropdown-menu" aria-labelledby="bulkActionsDropdown">
                <li>
                  <form id="bulkSendEmailForm" method="POST" action="{{ route('admin.registrations.bulk-send-confirmation') }}" style="display: inline;">
                    @csrf
                    <button type="submit" class="dropdown-item" id="bulkSendEmailBtn" onclick="return confirmBulkAction('gửi email xác nhận')">
                      <i class="fas fa-envelope me-2"></i>Gửi email xác nhận
                    </button>
                  </form>
                </li>
              </ul>
            </div>
            <button type="button" class="btn btn-outline-secondary" onclick="clearSelection()">
              <i class="fas fa-times me-1"></i>Bỏ chọn
            </button>
          </div>
        </div>

        <!-- Loading Overlay removed to avoid form submission conflicts -->

        <!-- Registrations Table -->
        <div class="admin-table-container">
          <form id="bulkForm">
            <div class="table-responsive">
            <table class="table table-hover admin-table">
              <thead>
                <tr>
                  <th>
                    <input type="checkbox" id="selectAll" class="form-check-input">
                  </th>
                  <th>Mã đăng ký</th>
                  {{-- <th>ID</th> --}}
                  <th>Họ tên</th>
                  <th>Giới tính</th>
                  <th>Email</th>
                  <th>Cơ quan</th>
                  <th>Sự kiện</th>
                  <th>Ngày đăng ký</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @forelse($registrations as $registration)
                  <tr>
                    <td>
                      <input type="checkbox" name="selected_registrations[]" value="{{ $registration->id }}" class="form-check-input registration-checkbox">
                    </td>
                    <td>
                      <span class="badge bg-primary">{{ $registration->registration_code }}</span>
                    </td>
                    {{-- <td>{{ $registration->id }}</td> --}}
                    <td>
                      <div class="user-info">
                        <strong>{{ $registration->full_name }}</strong>
                        <small class="text-muted d-block">{{ $registration->title }}</small>
                      </div>
                    </td>
                    <td>{{ $registration->gender_display }}</td>
                    <td>
                      <a href="mailto:{{ $registration->email }}" class="text-decoration-none">
                        {{ $registration->email }}
                      </a>
                    </td>
                    <td>
                      <div class="organization-info">
                        <strong>{{ $registration->organization }}</strong>
                        <small class="text-muted d-block">{{ $registration->department }}</small>
                      </div>
                    </td>
                    <td>
                      <span class="badge bg-info">{{ $registration->event_type_display }}</span>
                    </td>
                    <td>{{ $registration->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                      <div class="d-flex gap-1">
                        <a href="{{ route('admin.registrations.show', $registration) }}" class="btn btn-sm btn-outline-primary" title="Xem chi tiết">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-success" title="Gửi email xác nhận" onclick="sendIndividualEmail({{ $registration->id }}, '{{ $registration->full_name }}'); return false;">
                          <i class="fas fa-envelope"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-outline-danger" onclick="deleteRegistration({{ $registration->id }})" title="Xóa">
                          <i class="fas fa-trash"></i>
                        </button>
                      </div>
                    </td>
                  </tr>
                @empty
                  <tr>
                    <td colspan="10" class="text-center py-4">
                      <div class="empty-state">
                        <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                        <h5>Không có đăng ký nào</h5>
                        <p class="text-muted">Chưa có đăng ký nào phù hợp với bộ lọc của bạn.</p>
                      </div>
                    </td>
                  </tr>
                @endforelse
              </tbody>
            </table>
            </div>
          </form>
        </div>

        <!-- Results Info -->
          <div class="d-flex justify-content-center mt-4">
            <div class="pagination-wrapper">
              <div class="pagination-info">
                Hiển thị tất cả {{ $registrations->count() }} kết quả
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Xác nhận xóa</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <p>Bạn có chắc chắn muốn xóa đăng ký này không?</p>
          <p class="text-muted">Hành động này không thể hoàn tác.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
          <form id="deleteForm" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Xóa</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function deleteRegistration(id) {
      document.getElementById('deleteForm').action = `/admin/registrations/${id}`;
      new bootstrap.Modal(document.getElementById('deleteModal')).show();
    }

    function sendIndividualEmail(registrationId, fullName) {
      if (confirm(`Bạn có chắc chắn muốn gửi email xác nhận đến ${fullName}?`)) {
        console.log('Sending individual email for registration ID:', registrationId);
        
        // Create a form dynamically
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/registrations/${registrationId}/send-confirmation`;
        
        // Add CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const csrfInput = document.createElement('input');
        csrfInput.type = 'hidden';
        csrfInput.name = '_token';
        csrfInput.value = csrfToken;
        form.appendChild(csrfInput);
        
        // Submit form
        document.body.appendChild(form);
        form.submit();
        document.body.removeChild(form);
      }
    }

    // Debug all form submissions
    document.addEventListener('submit', function(e) {
      console.log('Form submitted to:', e.target.action);
      console.log('Form method:', e.target.method);
      console.log('Form element:', e.target);
    });

    // Bulk selection functionality
    document.addEventListener('DOMContentLoaded', function() {
      const selectAllCheckbox = document.getElementById('selectAll');
      const registrationCheckboxes = document.querySelectorAll('.registration-checkbox');
      const bulkActions = document.querySelector('.bulk-actions');
      const selectedCount = document.getElementById('selectedCount');
      const bulkSendEmailForm = document.getElementById('bulkSendEmailForm');

      // Select all functionality
      selectAllCheckbox.addEventListener('change', function() {
        registrationCheckboxes.forEach(checkbox => {
          checkbox.checked = this.checked;
        });
        updateBulkActions();
      });

      // Individual checkbox functionality
      registrationCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
          updateSelectAllState();
          updateBulkActions();
        });
      });

      function updateSelectAllState() {
        const checkedBoxes = document.querySelectorAll('.registration-checkbox:checked');
        selectAllCheckbox.checked = checkedBoxes.length === registrationCheckboxes.length;
        selectAllCheckbox.indeterminate = checkedBoxes.length > 0 && checkedBoxes.length < registrationCheckboxes.length;
      }

      function updateBulkActions() {
        const checkedBoxes = document.querySelectorAll('.registration-checkbox:checked');
        const count = checkedBoxes.length;
        
        if (count > 0) {
          bulkActions.style.display = 'block';
          selectedCount.textContent = `${count} đăng ký được chọn`;
        } else {
          bulkActions.style.display = 'none';
        }
      }

      // Bulk form submission
      bulkSendEmailForm.addEventListener('submit', function(e) {
        const checkedBoxes = document.querySelectorAll('.registration-checkbox:checked');
        if (checkedBoxes.length === 0) {
          e.preventDefault();
          alert('Vui lòng chọn ít nhất một đăng ký để gửi email.');
          return;
        }

        // Refresh CSRF token
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const csrfInput = this.querySelector('input[name="_token"]');
        if (csrfInput) {
          csrfInput.value = csrfToken;
        }

        // Loading removed to avoid form submission conflicts

        // Clear any existing selected_registrations inputs first
        const existingInputs = this.querySelectorAll('input[name="selected_registrations[]"]');
        existingInputs.forEach(input => input.remove());

        // Add selected IDs to form
        checkedBoxes.forEach(checkbox => {
          const hiddenInput = document.createElement('input');
          hiddenInput.type = 'hidden';
          hiddenInput.name = 'selected_registrations[]';
          hiddenInput.value = checkbox.value;
          this.appendChild(hiddenInput);
        });

        console.log('Bulk form submitted with', checkedBoxes.length, 'registrations');
        console.log('CSRF token:', csrfToken);
      });
    });

    function confirmBulkAction(action) {
      const checkedBoxes = document.querySelectorAll('.registration-checkbox:checked');
      return confirm(`Bạn có chắc chắn muốn ${action} cho ${checkedBoxes.length} đăng ký đã chọn?`);
    }

    function clearSelection() {
      document.querySelectorAll('.registration-checkbox').forEach(checkbox => {
        checkbox.checked = false;
      });
      document.getElementById('selectAll').checked = false;
      document.querySelector('.bulk-actions').style.display = 'none';
    }

    // Loading overlay functions removed to avoid form submission conflicts
  </script>
</body>

</html>
