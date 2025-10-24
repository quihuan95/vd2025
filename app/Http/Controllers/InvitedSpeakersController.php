<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvitedSpeakersController extends Controller
{
  /**
   * Display the invited speakers page
   */
  public function index()
  {
    $speakers = $this->getSpeakers();

    return view('pages.invited.speakers', compact('speakers'));
  }

  /**
   * Get speakers data (for AJAX requests)
   */
  protected function getSpeakers()
  {
    return [
      [
        'name_vi' => 'TS. Dương Đức Hùng',
        'name_en' => 'Dr. Duong Duc Hung',
        'title_vi' => 'Giám đốc',
        'title_en' => 'Director',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '1. Dương Đức Hùng.jpg'
      ],
      [
        'name_vi' => 'GS. Trịnh Hồng Sơn',
        'name_en' => 'Prof. Trinh Hong Son',
        'title_vi' => 'Nguyên Phó Giám đốc',
        'title_en' => 'Former Vice Director',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '2. Trịnh Hồng Sơn.jpg'
      ],
      [
        'name_vi' => 'GS. Masakazu Yamamoto',
        'name_en' => 'Prof. Masakazu Yamamoto',
        'title_vi' => 'Giám đốc',
        'title_en' => 'Director',
        'organization_vi' => 'Bệnh viện Utsunomiya Memorial',
        'organization_en' => 'Utsunomiya Memorial Hospital',
        'image' => '3. Masakazu Yamamoto.jpg'
      ],
      [
        'name_vi' => 'GS. Trần Bình Giang',
        'name_en' => 'Prof. Tran Binh Giang',
        'title_vi' => 'Nguyên Giám đốc',
        'title_en' => 'Former Director',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '4. Trần Bình Giang.jpg'
      ],
      [
        'name_vi' => 'TS. Hà Anh Đức',
        'name_en' => 'Dr. Ha Anh Duc',
        'title_vi' => 'Cục trưởng Cục Quản lý Khám, chữa bệnh',
        'title_en' => 'Director of the Medical Service Administration',
        'organization_vi' => 'Bộ Y tế',
        'organization_en' => 'Ministry of Health',
        'image' => '5. Hà Anh Đức.jpg'
      ],
      [
        'name_vi' => 'GS. Ken Takasaki',
        'name_en' => 'Prof. Ken Takasaki',
        'title_vi' => 'Giáo sư danh dự',
        'title_en' => 'Professor emeritus',
        'organization_vi' => 'Đại học Y tế Phụ nữ Tokyo',
        'organization_en' => 'Tokyo Women’s Medical University',
        'image' => '6. Ken Takasaki.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Trần Đình Thơ',
        'name_en' => 'Assoc. Prof. Tran Dinh Tho',
        'title_vi' => 'Phó Giám đốc Bệnh viện Hữu nghị Việt Đức; Trưởng khoa Phẫu thuật Gan Mật',
        'title_en' => 'Deputy Director of Viet Duc University Hospital; Head of Hepato-Biliary Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '7. Trần Đình Thơ.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Yuan Guandou',
        'name_en' => 'Assoc. Prof. Yuan Guandou',
        'title_vi' => 'Bác sĩ, Khoa Ngoại Gan - Mật',
        'title_en' => 'Doctor, Hepatobiliary Surgery Department',
        'organization_vi' => 'Bệnh viện Trực thuộc số 1, Đại học Y Quảng Tây',
        'organization_en' => 'The 1st Affiliated Hospital of Guangxi Medical University',
        'image' => '8. Yuan Guandou.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Lưu Quang Thùy',
        'name_en' => 'Assoc. Prof. Luu Quang Thuy',
        'title_vi' => 'Giám đốc Trung tâm Gây mê và Hồi sức ngoại khoa',
        'title_en' => 'Head of Anesthesia & Surgical Intensive Care Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '9. Lưu Quang Thùy.jpg'
      ],
      [
        'name_vi' => 'TS. Dương Trọng Hiền',
        'name_en' => 'Dr. Duong Trong Hien',
        'title_vi' => 'Trưởng khoa Phẫu thuật Cấp cứu Tiêu hoá',
        'title_en' => 'Head of Emergency Abdominal Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '10. Dương Trọng Hiền.jpg'
      ],
      [
        'name_vi' => 'ThS. Nguyễn Hà Hải Trang',
        'name_en' => 'M.Sc. Nguyen Ha Hai Trang',
        'title_vi' => 'Bác sĩ Trung tâm Gây mê Hồi sức Ngoại khoa',
        'title_en' => 'Doctor - Anesthesia & Surgical Intensive Care Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '11. Nguyễn Hà Hải Trang.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Dong Kun',
        'name_en' => 'Assoc. Prof. Dong Kun',
        'title_vi' => 'Giáo sư phụ trách, Trung tâm Ghép tạng',
        'title_en' => 'Chief Professor of the Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Trực thuộc số 1, Đại học Y Quảng Tây',
        'organization_en' => 'The 1st Affiliated Hospital of Guangxi Medical University',
        'image' => '12. Dong Kun.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Lê Thanh Dũng',
        'name_en' => 'Assoc. Prof. Le Thanh Dung',
        'title_vi' => 'Trưởng khoa Chẩn đoán hình ảnh',
        'title_en' => 'Head of Imaging Diagnosis',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '13. Lê Thanh Dũng.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Nguyễn Quang Nghĩa',
        'name_en' => 'Assoc. Prof. Nguyen Quang Nghia',
        'title_vi' => 'Giám đốc Trung tâm Ghép tạng',
        'title_en' => 'Head of Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '14. Nguyễn Quang Nghĩa.jpg'
      ],
      [
        'name_vi' => 'TS. Ninh Việt Khải',
        'name_en' => 'Dr. Ninh Viet Khai',
        'title_vi' => 'Phó Giám đốc Trung tâm Ghép tạng',
        'title_en' => 'Deputy Head of Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '15. Ninh Việt Khải.jpg'
      ],
      [
        'name_vi' => 'ThS. Trần Đình Dũng',
        'name_en' => 'M.Sc. Tran Dinh Dung',
        'title_vi' => 'Bác sĩ Trung tâm Ghép tạng',
        'title_en' => 'Doctor - Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '16. Trần Đình Dũng.jpg'
      ],
      [
        'name_vi' => 'TS. Thân Văn Sỹ',
        'name_en' => 'Dr. Than Van Sy',
        'title_vi' => 'Bác sĩ - Khoa Chẩn đoán hình ảnh',
        'title_en' => 'Doctor - Imaging Diagnosis',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '17. Thân Văn Sỹ.jpg'
      ],
      [
        'name_vi' => 'GS. Wu Jihua',
        'name_en' => 'Prof. Wu Jihua',
        'title_vi' => 'Giám đốc Khoa Hồi sức tích cực, Trung tâm Y học Cấy ghép',
        'title_en' => 'Director of Intensive Care Unit, Transplant Medicine Center',
        'organization_vi' => 'Bệnh viện Trực thuộc số 2, Đại học Y Quảng Tây',
        'organization_en' => 'The 2nd Affiliated Hospital of Guangxi Medical University',
        'image' => '18. Wu Jihua.jpg'
      ],
      [
        'name_vi' => 'GS. Li Silin',
        'name_en' => 'Prof. Li Silin',
        'title_vi' => 'Phó Chủ nhiệm Khoa',
        'title_en' => 'Deputy Chief Physician',
        'organization_vi' => 'Bệnh viện Trực thuộc số 2, Đại học Y Quảng Tây',
        'organization_en' => 'The 2nd Affiliated Hospital of Guangxi Medical University',
        'image' => '19. Silin Li.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Nguyễn Tiến Quyết',
        'name_en' => 'Assoc. Prof. Nguyen Tien Quyet',
        'title_vi' => 'Nguyên Giám đốc',
        'title_en' => 'Former Director',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '20. Nguyễn Tiến Quyết.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Phùng Duy Hồng Sơn',
        'name_en' => 'Assoc. Prof. Phung Duy Hong Son',
        'title_vi' => 'Phó Giám đốc Trung tâm Tim mạch và Lồng ngực; Trưởng khoa Ngoại Tim mạch - Lồng ngực',
        'title_en' => 'Deputy Head of Cardiovascular and Thoracic Center; Head of Cardiovascular and Thoracic Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '21. Phùng Duy Hồng Sơn.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Lê Nguyên Vũ',
        'name_en' => 'Assoc. Prof. Le Nguyen Vu',
        'title_vi' => 'Phó Giám đốc Trung tâm Ghép tạng',
        'title_en' => 'Deputy Head of Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '22. Lê Nguyên Vũ.jpg'
      ],
      [
        'name_vi' => 'TS. Nguyễn Sỹ Lánh',
        'name_en' => 'Dr. Nguyen Sy Lanh',
        'title_vi' => 'Trưởng khoa Giải phẫu bệnh',
        'title_en' => 'Head of Anatomic Pathology, Cytological Pathology and Forensic Medicine Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '23. Nguyễn Sỹ Lánh.jpg'
      ],
      [
        'name_vi' => 'GS. Yoshihiko Watarai',
        'name_en' => 'Prof. Yoshihiko Watarai',
        'title_vi' => 'Phó Giám đốc, Bệnh viện Nagoya Daini Red Cross; Trưởng khoa Ghép tạng',
        'title_en' => 'Vice President, Japanese Red Cross Aichi Medical Center Nagoya Daini Hospital; Director, Department of Transplant Surgery',
        'organization_vi' => 'Bệnh viện Nagoya Daini Red Cross',
        'organization_en' => 'Nagoya Daini Red Cross Hospital',
        'image' => '24. Yoshihiko Watarai.jpg'
      ],
      [
        'name_vi' => 'BSCKII. Hoàng Khắc Chuẩn',
        'name_en' => 'Dr. Hoang Khac Chuan, Specialist Level II',
        'title_vi' => 'Phụ trách khoa Ngoại Tiết niệu',
        'title_en' => 'In charge of Urology Surgery Department',
        'organization_vi' => 'Bệnh viện Chợ Rẫy',
        'organization_en' => 'Cho Ray Hospital',
        'image' => '25. Hoàng Khắc Chuẩn.jpg'
      ],
      [
        'name_vi' => 'TS. Nguyễn Thế Cường',
        'name_en' => 'Dr. Nguyen The Cuong',
        'title_vi' => 'Trưởng khoa Thận lọc máu',
        'title_en' => 'Head of Kidney Diseases and Dialysis Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '26. Nguyễn Thế Cường.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Nguyễn Hoàng Anh',
        'name_en' => 'Assoc. Prof. Nguyen Hoang Anh',
        'title_vi' => 'Giám đốc Trung tâm DI & ADR Quốc gia (Trường Đại học Dược Hà Nội); Phó Trưởng khoa Dược, Bệnh viện Bạch Mai',
        'title_en' => 'Director of National DI & ADR Center (Hanoi University of Pharmacy); Deputy Head of Pharmacy Department, Bach Mai Hospital',
        'organization_vi' => 'Trường Đại học Dược Hà Nội & Bệnh viện Bạch Mai',
        'organization_en' => 'Hanoi University of Pharmacy & Bach Mai Hospital',
        'image' => '27. Nguyễn Hoàng Anh.jpg'
      ],
      [
        'name_vi' => 'TS. Đỗ Tất Thành',
        'name_en' => 'Dr. Do Tat Thanh',
        'title_vi' => 'Giám đốc Trung tâm Phẫu thuật Đại trực tràng - Tầng sinh môn; Trưởng khoa Dinh dưỡng',
        'title_en' => 'Head of Center for Perineal Rectal Surgery; Head of Nutrition Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '28. Đỗ Tất Thành.jpg'
      ],
      [
        'name_vi' => 'ThS. Trần Minh Tuấn',
        'name_en' => 'M.Sc. Tran Minh Tuan',
        'title_vi' => 'Phó Giám đốc Trung tâm Ghép tạng',
        'title_en' => 'Deputy Head of Organ Transplantation Center',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '29. Trần Minh Tuấn.jpg'
      ],
      [
        'name_vi' => 'TS. Nguyễn Thị Vân',
        'name_en' => 'Dr. Nguyen Thi Van',
        'title_vi' => 'Trưởng khoa Vi sinh',
        'title_en' => 'Head of Microbiology Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '30. Nguyễn Thị Vân.jpg'
      ],
      [
        'name_vi' => 'DS. Chu Thị Kim Phương',
        'name_en' => 'Pharm. Chu Thi Kim Phuong',
        'title_vi' => 'Dược sĩ, Khoa Dược',
        'title_en' => 'Pharmacist, Pharmacy Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '31. Chu Thị Kim Phương.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Phạm Văn Bình',
        'name_en' => 'Assoc. Prof. Pham Van Binh',
        'title_vi' => 'Phó Giám đốc Bệnh viện K; Giám đốc Trung tâm Phẫu thuật Nội soi Robot',
        'title_en' => 'Deputy Director of K Hospital; Head of Robotic Endoscopic Surgery Center',
        'organization_vi' => 'Bệnh viện K',
        'organization_en' => 'K Hospital',
        'image' => '32. Phạm Văn Bình.jpg'
      ],
      [
        'name_vi' => 'Shih-Shiang Tung',
        'name_en' => 'Shih-Shiáng Tung',
        'title_vi' => 'Bác sĩ, Khoa Ngoại Tiết niệu',
        'title_en' => 'Doctor, Urology Surgery Department',
        'organization_vi' => 'Bệnh viện Đa khoa Cathay',
        'organization_en' => 'Cathay General Hospital',
        'image' => '33. Shih Shiang Tung.jpg'
      ],
      [
        'name_vi' => 'TS. Phạm Gia Anh',
        'name_en' => 'Dr. Pham Gia Anh',
        'title_vi' => 'Trưởng khoa Ung bướu và Xạ trị',
        'title_en' => 'Head of Oncology Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '34. Phạm Gia Anh.jpg'
      ],
      [
        'name_vi' => 'ThS. Nguyễn Văn Hà',
        'name_en' => 'M.Sc. Nguyen Van Ha',
        'title_vi' => 'Bác sĩ khoa Điều trị theo yêu cầu, cơ sở Quán Sứ',
        'title_en' => 'Doctor, On-demand Services Department, Quan Su Branch',
        'organization_vi' => 'Bệnh viện K',
        'organization_en' => 'K Hospital',
        'image' => '35. Nguyễn Văn Hà.jpg'
      ],
      [
        'name_vi' => 'Jiangtao Fan',
        'name_en' => 'Jiangtao Fan',
        'title_vi' => 'Trưởng khoa Phụ sản',
        'title_en' => 'Director and Chief Physician of Obstetrics and Gynecology Department',
        'organization_vi' => 'Bệnh viện Trực thuộc số 1, Đại học Y Quảng Tây',
        'organization_en' => 'The 1st Affiliated Hospital of Guangxi Medical University',
        'image' => '36. Jiangtao Fan.jpg'
      ],
      [
        'name_vi' => 'Charlotte Ngo',
        'name_en' => 'Charlotte Ngo',
        'title_vi' => 'Bác sĩ, Trung tâm Phẫu thuật & Ung thư phụ khoa - tuyến vú',
        'title_en' => 'Physician, Center for Gynecological and Breast Surgery and Cancerology',
        'organization_vi' => 'Bệnh viện tư nhân Peupliers - Paris',
        'organization_en' => 'Hôpital Privé des Peupliers - Paris',
        'image' => '37. Charlotte Ngo.jpg'
      ],
      [
        'name_vi' => 'BSCKII. Võ Thị Huyền Trang',
        'name_en' => 'Dr. Vo Thi Huyen Trang, Specialist Level II',
        'title_vi' => 'Bác sĩ Khoa Ung bướu và Xạ trị',
        'title_en' => 'Doctor - Oncology Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '38. Võ Thị Huyền Trang.jpg'
      ],
      [
        'name_vi' => 'GS. Qikai Hua',
        'name_en' => 'Prof. Qikai Hua',
        'title_vi' => 'Chủ nhiệm khoa Phẫu thuật Xương Khớp',
        'title_en' => 'Chief Physician, Department of Bone and Joint Surgery',
        'organization_vi' => 'Bệnh viện Trực thuộc số 1, Đại học Y Quảng Tây',
        'organization_en' => 'The 1st Affiliated Hospital of Guangxi Medical University',
        'image' => '39. Qikai Hua.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Nguyễn Đức Chính',
        'name_en' => 'Assoc. Prof. Nguyen Duc Chinh',
        'title_vi' => 'Nguyên Trưởng khoa Phẫu thuật Nhiễm khuẩn',
        'title_en' => 'Former Head of Septic Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '40. Nguyễn Đức Chính.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Nguyễn Hồng Hà',
        'name_en' => 'Assoc. Prof. Nguyen Hong Ha',
        'title_vi' => 'Trưởng khoa Phẫu thuật Hàm mặt - Tạo hình thẩm mỹ',
        'title_en' => 'Head of Maxillofacial, Plastic & Aesthetic Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '41. Nguyễn Hồng Hà.jpg'
      ],
      [
        'name_vi' => 'BSCKII. Trần Tuấn Anh',
        'name_en' => 'Dr. Tran Tuan Anh Specialist Level II',
        'title_vi' => 'Phó Trưởng khoa Phẫu thuật Nhiễm khuẩn',
        'title_en' => 'Deputy Head of Septic Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '42. Trần Tuấn Anh.jpg'
      ],
      [
        'name_vi' => 'TS. Nguyễn Văn Học',
        'name_en' => 'Dr. Nguyen Van Hoc',
        'title_vi' => 'Phó Trưởng khoa Phẫu thuật Chi trên và Y học Thể thao',
        'title_en' => 'Deputy Head of Upper Extremities Surgery and Sports Medicine Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '43. Nguyễn Văn Học.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Phạm Hữu Lư',
        'name_en' => 'Assoc. Prof. Pham Huu Lu',
        'title_vi' => 'Phó Trưởng khoa Ngoại Tim mạch và Lồng ngực',
        'title_en' => 'Deputy Head of Cardiovascular and Thoracic Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '44. Phạm Hữu Lư.jpg'
      ],
      [
        'name_vi' => 'TS. Đinh Văn Lượng',
        'name_en' => 'Dr. Dinh Van Luong',
        'title_vi' => 'Giám đốc Bệnh viện Phổi Trung ương',
        'title_en' => 'Director of Vietnam National Lung Hospital',
        'organization_vi' => 'Bệnh viện Phổi Trung ương',
        'organization_en' => 'Vietnam National Lung Hospital',
        'image' => '45. Đinh Văn Lượng.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Guilin Peng',
        'name_en' => 'Assoc. Prof. Guilin Peng',
        'title_vi' => 'Giám đốc Khoa Phẫu thuật Lồng ngực và Ghép tạng',
        'title_en' => 'Director of Thoracic Surgery and Organ Transplantation Ward',
        'organization_vi' => 'Bệnh viện Trực thuộc số 1, Đại học Y Quảng Châu',
        'organization_en' => 'The 1st Affiliated Hospital of Guangzhou Medical University',
        'image' => '46. Guilin Peng.jpg'
      ],
      [
        'name_vi' => 'ThS. Lê Ngọc Huy',
        'name_en' => 'M.Sc. Le Ngoc Huy',
        'title_vi' => 'Phó Giám đốc Trung tâm Ghép phổi',
        'title_en' => 'Deputy Head of Lung Transplantation Center',
        'organization_vi' => 'Bệnh viện Phổi Trung ương',
        'organization_en' => 'Vietnam National Lung Hospital',
        'image' => '47. Lê Ngọc Huy.jpg'
      ],
      [
        'name_vi' => 'Madalina Grigoroiu',
        'name_en' => 'Madalina Grigoroiu',
        'title_vi' => 'Bác sĩ, Đơn vị Phẫu thuật Lồng ngực',
        'title_en' => 'Doctor, Thoracic Surgery Unit',
        'organization_vi' => 'Bệnh viện tư nhân Antony',
        'organization_en' => 'Hôpital Privé d’Antony',
        'image' => '48. Madalina Grigoroiu.jpg'
      ],
      [
        'name_vi' => 'GS. Mehdi Karoui',
        'name_en' => 'Prof. Mehdi Karoui',
        'title_vi' => 'Trưởng khoa Phẫu thuật Tiêu hóa và Ung thư',
        'title_en' => 'Head of Digestive Surgery and Oncology',
        'organization_vi' => 'Bệnh viện Châu Âu Georges Pompidou, Trung tâm AP-HP - Đại học Paris',
        'organization_en' => 'Hôpital Européen Georges Pompidou - AP-HP Centre - Université Paris',
        'image' => '49. Mehdi Karoui.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Phạm Đức Huấn',
        'name_en' => 'Assoc. Prof. Pham Duc Huan',
        'title_vi' => 'Giám đốc Trung tâm Tiêu hóa - Gan mật',
        'title_en' => 'Director of Center for Gastroenterology - Hepatobiliary - Urology',
        'organization_vi' => 'Bệnh viện Đa khoa Quốc tế Vinmec Times City',
        'organization_en' => 'Vinmec Times City International Hospital',
        'image' => '50. Phạm Đức Huấn.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Lê Tư Hoàng',
        'name_en' => 'Assoc. Prof. Le Tu Hoang',
        'title_vi' => 'Trưởng khoa Điều trị theo yêu cầu',
        'title_en' => 'Head of On-demand Outpatient Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '51. Lê Tư Hoàng.jpg'
      ],
      [
        'name_vi' => 'GS. Antoin Brouquet',
        'name_en' => 'Prof. Antoin Brouquet',
        'title_vi' => 'Trưởng khoa Phẫu thuật Tiêu hóa và Ung thư',
        'title_en' => 'Head of Digestive Surgery and Oncology',
        'organization_vi' => 'Bệnh viện Bicêtre - Hệ thống Bệnh viện Công Paris, Trường Đại học Y Nam Paris',
        'organization_en' => 'Hôpital Bicêtre - Assistance Publique - Hôpitaux de Paris / Faculté de Médecine - Paris Sud',
        'image' => '52. Antoin Brouquet.jpg'
      ],
      [
        'name_vi' => 'PGS. TS. Phạm Hoàng Hà',
        'name_en' => 'Assoc. Prof. Pham Hoang Ha',
        'title_vi' => 'Trưởng khoa Phẫu thuật Tiêu hoá',
        'title_en' => 'Head of Digestive Surgery Department',
        'organization_vi' => 'Bệnh viện Hữu nghị Việt Đức',
        'organization_en' => 'Viet Duc University Hospital',
        'image' => '53. Phạm Hoàng Hà.jpg'
      ],
      [
        'name_vi' => 'Federica Panini',
        'name_en' => 'Federica Panini',
        'title_vi' => 'Bác sĩ',
        'title_en' => 'Doctor',
        'organization_vi' => 'Bệnh viện Créteil',
        'organization_en' => 'Centre Intercommunal de Créteil',
        'image' => '54. Federica Papini.jpg'
      ],
      [
        'name_vi' => 'Filippo Pacini',
        'name_en' => 'Filippo Pacini',
        'title_vi' => 'Giám đốc Trung tâm điều trị Béo phì',
        'title_en' => 'Head of the Paris Peupliers Obesity Center',
        'organization_vi' => 'Bệnh viện tư nhân Peupliers - Paris',
        'organization_en' => 'Hôpital Privé des Peupliers - Paris',
        'image' => '55. Filippo Pacini.jpg'
      ]
    ];
  }
}
