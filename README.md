
## Endpoints

### Guru API

**Store Guru**
- **Method:** POST
- **Endpoint:** `/guruapi`
- **Description:** Adds a new teacher's data.
- **Body Parameters:**
  - `nip`: string
  - `nama`: string
  - `jabatan`: string
  - `kelas_id`: integer
  - `nomor_hp`: string
- **Success Response:** Newly created teacher data.

**List Gurus**
- **Method:** GET
- **Endpoint:** `/guruapi`
- **Description:** Retrieves all teachers' data.
- **Success Response:** Array of all teachers' data.

### Jurusan API

**List Jurusans**
- **Method:** GET
- **Endpoint:** `/jurusanapi`
- **Description:** Retrieves all departments' data.
- **Success Response:** Array of all departments' data.

### Tingkat API

**List Tingkats**
- **Method:** GET
- **Endpoint:** `/tingkatapi`
- **Description:** Retrieves all levels' data.
- **Success Response:** Array of all levels' data.

### Kelas API

**List Kelas**
- **Method:** GET
- **Endpoint:** `/kelasapi`
- **Description:** Retrieves all classes' data.
- **Success Response:** Array of all classes' data.

### Siswa API

**List Siswas**
- **Method:** GET
- **Endpoint:** `/siswaapi`
- **Description:** Retrieves all students' data.
- **Success Response:** Array of all students' data.

### Wali Murid API

**List Wali Murid**
- **Method:** GET
- **Endpoint:** `/walimuridapi`
- **Description:** Retrieves all parents' data.
- **Success Response:** Array of all parents' data.

### Jenis Pelanggaran API

**List Jenis Pelanggaran**
- **Method:** GET
- **Endpoint:** `/jenispelanggaranapi`
- **Description:** Retrieves all types of violations.
- **Success Response:** Array of all types of violations.

### Pelanggaran API

**List Pelanggaran**
- **Method:** GET
- **Endpoint:** `/pelanggaranapi`
- **Description:** Retrieves all violations' data.
- **Success Response:** Array of all violations' data.

**Search Pelanggaran**
- **Method:** GET
- **Endpoint:** `/pelanggaranapi/search`
- **Description:** Search for violations data by keyword.
- **Parameters:** `keyword`: string
- **Success Response:** Array of violations data matching the keyword.

**Add Pelanggaran**
- **Method:** POST
- **Endpoint:** `/pelanggaranapi/add`
- **Description:** Adds new violation data.
- **Body Parameters:**
  - `siswa_id`: integer
  - `siswa_kelas_id`: integer
  - `tanggal`: date
  - `jenis_id`: integer
  - `detail`: text
- **Success Response:** Newly added violation data.

### Logout API

**Logout**
- **Method:** POST
- **Endpoint:** `/logout`
- **Description:** Logs out the current user.
- **Success Response:** Confirmation of logout.

## Dashboard Endpoints

### Get Total Number of Students

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/totalsiswa`
- **Description:** Retrieves the total number of students.
- **Response:** `{"total_students": 100}`

### Get Total Number of Violations

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/totalpelanggaran`
- **Description:** Retrieves the total number of violations.
- **Response:** `{"total_violations": 150}`

### Get Number of Violations by Day

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/pelanggaranbyday`
- **Description:** Retrieves the number of violations for the current day.
- **Response:** `{"violations_today": 5}`

### Get Violations by Category

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/pelanggaranbykategori`
- **Description:** Retrieves the number of violations broken down by category.
- **Response:** `{"category_data": [{"category": "Category 1", "violations": 20}, {"category": "Category 2", "violations": 30}]}`

### Get Today's Violations by Category

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/pelanggaranharikategori`
- **Description:** Retrieves today's number of violations broken down by category.
- **Response:** `{"today_category_data": [{"category": "Category 1", "violations": 5}, {"category": "Category 2", "violations": 15}]}`

### Get Number of Violations per Class

- **HTTP Method:** GET
- **Endpoint:** `/dashboard/pelanggaranbykelas`
- **Description:** Retrieves the number of violations per class.
- **Response:** `{"violations_per_class": [{"class": "Class 1", "violations": 30}, {"class": "Class 2", "violations": 40}]}`

## Notes

- The responses shown are examples of expected JSON output.
- Replace `dashboard` with the actual path prefix if your API structure requires it.
- Ensure that the necessary authentication is in place for accessing these endpoints.
