Explanation:  
This table resolves the **many-to-many relationship** between students and courses and stores the grade for each enrollment.

---

### Result

After decomposition:

- No repeated student, course, or professor information.
- No update anomalies.
- All tables satisfy **Third Normal Form (3NF)**.




Part 2: Relationship Drills

### 1. Author — Book

Relationship Type: **One-to-Many (1:N)**  
FK Location: **Book table (author_id)**  

Explanation:  
Một author có thể viết nhiều book, nhưng mỗi book thường chỉ có một author.

---

### 2. Citizen — Passport

Relationship Type: **One-to-One (1:1)**  
FK Location: **Passport table (citizen_id)**  

Explanation:  
Một citizen chỉ có một passport và một passport chỉ thuộc về một citizen.

---

### 3. Customer — Order

Relationship Type: **One-to-Many (1:N)**  
FK Location: **Order table (customer_id)**  

Explanation:  
Một customer có thể tạo nhiều order, nhưng mỗi order chỉ thuộc về một customer.

---

### 4. Student — Class

Relationship Type: **Many-to-Many (N:N)**  
FK Location: **Enrollment / Student_Class table (student_id, class_id)**  

Explanation:  
Một student có thể học nhiều class và một class có nhiều student.  
Cần một bảng trung gian để lưu quan hệ.

---

### 5. Team — Player

Relationship Type: **One-to-Many (1:N)**  
FK Location: **Player table (team_id)**  

Explanation:  
Một team có nhiều player, nhưng mỗi player chỉ thuộc về một team.