
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
