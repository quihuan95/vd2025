<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết đăng ký - WCES 2025</title>
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

    .admin-card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      margin-bottom: 2rem;
    }

    .card-header {
      background: #f8f9fa;
      border-bottom: 1px solid #dee2e6;
      padding: 1.5rem;
      border-radius: 12px 12px 0 0;
    }

    .card-title {
      margin-bottom: 0;
      color: #495057;
      font-weight: 600;
    }

    .card-body {
      padding: 1.5rem;
    }

    .form-label {
      color: #495057;
      margin-bottom: 0.5rem;
    }

    .form-control-plaintext {
      padding: 0.5rem 0;
      color: #333;
      border-bottom: 1px solid #e9ecef;
    }

    .status-badge {
      padding: 0.25rem 0.75rem;
      border-radius: 20px;
      font-size: 0.875rem;
      font-weight: 500;
    }

    .status-badge.large {
      padding: 0.5rem 1rem;
      font-size: 1rem;
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

    .current-status {
      padding: 1rem;
      background: #f8f9fa;
      border-radius: 8px;
      text-align: center;
    }

    @media (max-width: 768px) {
      .admin-header {
        padding: 1.5rem;
      }

      .card-header,
      .card-body {
        padding: 1rem;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12" style="max-width: 1200px; margin: 2rem auto;">
        <div class="admin-header">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h1 class="admin-title">
                <i class="fas fa-user me-2"></i>
                Chi tiết đăng ký
              </h1>
              <p class="admin-subtitle">Thông tin chi tiết đăng ký tham dự</p>
            </div>
            <div>
              <a href="{{ route('admin.registrations.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i> Quay lại
              </a>
            </div>
            <button type="button" class="btn btn-outline-danger" onclick="deleteRegistration({{ $registration->id }})">
              <i class="fas fa-trash me-1"></i>
              Xóa đăng ký
            </button>
          </div>
        </div>

        <div class="row">
          <!-- Registration Details -->
          <div class="col-lg-8">
            <div class="admin-card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-info-circle me-2"></i>
                  Thông tin đăng ký
                </h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Mã đăng ký</label>
                    <p class="form-control-plaintext">
                      <span class="badge bg-primary fs-6">{{ $registration->registration_code }}</span>
                    </p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">ID</label>
                    <p class="form-control-plaintext">{{ $registration->id }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Họ và tên</label>
                    <p class="form-control-plaintext">{{ $registration->full_name }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Giới tính</label>
                    <p class="form-control-plaintext">{{ $registration->gender_display }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Ngày sinh</label>
                    <p class="form-control-plaintext">{{ $registration->date_of_birth->format('d/m/Y') }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <p class="form-control-plaintext">
                      <a href="mailto:{{ $registration->email }}" class="text-decoration-none">
                        {{ $registration->email }}
                      </a>
                    </p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Số điện thoại</label>
                    <p class="form-control-plaintext">
                      <a href="tel:{{ $registration->phone }}" class="text-decoration-none">
                        {{ $registration->phone }}
                      </a>
                    </p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Cơ quan</label>
                    <p class="form-control-plaintext">{{ $registration->organization }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Khoa/Phòng</label>
                    <p class="form-control-plaintext">{{ $registration->department }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Chức vụ</label>
                    <p class="form-control-plaintext">{{ $registration->title }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Ngày đăng ký</label>
                    <p class="form-control-plaintext">{{ $registration->created_at->format('d/m/Y H:i:s') }}</p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Cập nhật lần cuối</label>
                    <p class="form-control-plaintext">{{ $registration->updated_at->format('d/m/Y H:i:s') }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Status Management -->
          <div class="col-lg-4">
            <div class="admin-card">
              <div class="card-header">
                <h5 class="card-title">
                  <i class="fas fa-cog me-2"></i>
                  Quản lý trạng thái
                </h5>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('admin.registrations.update-status', $registration) }}">
                  @csrf
                  @method('PATCH')

                  <div class="mb-3">
                    <label for="status" class="form-label fw-bold">Trạng thái hiện tại</label>
                    <div class="current-status">
                      <span class="status-badge status-{{ $registration->status }} large">
                        {{ $registration->status_display }}
                      </span>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="status" class="form-label fw-bold">Cập nhật trạng thái</label>
                    <select class="form-select" id="status" name="status" required>
                      <option value="pending" {{ $registration->status == 'pending' ? 'selected' : '' }}>Chờ duyệt</option>
                      <option value="approved" {{ $registration->status == 'approved' ? 'selected' : '' }}>Đã duyệt</option>
                      <option value="rejected" {{ $registration->status == 'rejected' ? 'selected' : '' }}>Từ chối</option>
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="notes" class="form-label fw-bold">Ghi chú</label>
                    <textarea class="form-control" id="notes" name="notes" rows="4" placeholder="Nhập ghi chú (tùy chọn)">{{ $registration->notes }}</textarea>
                  </div>

                  <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-save me-1"></i>
                    Cập nhật trạng thái
                  </button>
                </form>
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
          <p>Bạn có chắc chắn muốn xóa đăng ký của <strong>{{ $registration->full_name }}</strong> không?</p>
          <p class="text-muted">Hành động này không thể hoàn tác.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
          <form method="POST" action="{{ route('admin.registrations.destroy', $registration) }}" style="display: inline;">
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
      new bootstrap.Modal(document.getElementById('deleteModal')).show();
    }
  </script>
</body>

</html>
