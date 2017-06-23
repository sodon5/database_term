# database_term

## Design Phases(설계 단계)
* User- requirement analysis 
1. 장래의 DB 이용자들이 필요로 하는 데이터를 충분히 규정하는 것
2. resut : specification of user requirements

* Conceptual-design
1.데이터모델을 선택, 선택한 데이터 모델의 개념을 적용 -> 요구들을 DB의 개념적인 스키마로 바꿈
2. E-R model은 일반적으로 conceputal-design을 나타내는데 사용됨
3. E-R model의 용어로 기술된 conceptual-design은 DB의 모든 entity set, attributes, relationship set, constraints를 명시함
4. 일반적으로 이 단계에서는d E-R diagram을 생성함
5. resut : specification of functional requirement 

* logical-design phase
1. 상위의 conceptual schema를 사용할 데이터베이스를 구현 데이터 모델에 대응시킴
- 구현 데이터 모델은 주로 relational data model
2. 일반적으로 ER model 로 정의된 conceptual schema를 relational schema로 대응시키는 작업으로 이루어짐

* physical-design phase
1. 결과로 나온 시스템 특유의 데이터베이스 스키마를 데이터베이스의 물리적 속성들이 구체화되는 단계
2. 파일 구성 형식과 인덱스 구조에 대한 선택을 포함


## Process
1. User-requirement analysis sd
2. Conceptual design
3. 
4. 

## Result of the process
1. specification of user requirements
2. specification of functional requirements
3.  
4.  




### 수정사항(ER-diagram 기준)
* lecture_info를 lecture_attend로 수정
* lec_grade에 attend_grade 추가
* lec_hw에 hwcheck란은 삭제
