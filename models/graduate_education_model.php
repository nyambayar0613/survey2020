<?php


class graduate_education_model extends  Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function save(){
        if(isset($_POST['questions'])) {
            $insertData = [];
            foreach($_POST['questions'] as $key => $value) {
                $arrayTypeVal = '';

                if (gettype($value) == 'array') {
                    foreach ($value as $k => $v) {
                        $arrayTypeVal .= $v.', ';
                    }

                    if($arrayTypeVal != ''){
                        $arrayTypeVal = substr($arrayTypeVal, 0 , strlen($arrayTypeVal)-1);
                    }

                    $insertData[$key] = $arrayTypeVal;
                } else {
                    $insertData[$key] = $value;
                }

            }

            $insertData['created_at']=date('Y-m-d H:i:s');
            $added = $this->db->insert('poll_graduate_education_votes', $insertData);  // Table name, column names and respective values

            if($added){
                echo json_encode(['isSuccess'=> true]);
            } else {
                echo json_encode(['isSuccess'=> false]);
            }
        } else {
            echo "Noooooooob";
        }
    }

    public function getStatisticVotes() {
        $query = $this->db->select("SELECT * FROM poll_graduate_education_votes");

        $newData = [];

        foreach ($query as $key => $item) {
            $newData[$key] = $item;

            if ($item['q1_3'] == '남성' || $item['q1_3'] == '1') {
                $newData[$key]['q1_3'] = '1';
            } else if ($item['q1_3'] == '여성' || $item['q1_3'] == '2') {
                $newData[$key]['q1_3'] = '2';
            }

            if ($item['q1_4'] == ' 20대' || $item['q1_4'] == '1') {
                $newData[$key]['q1_4'] = '1';
            } else if ($item['q1_4'] == '30대' || $item['q1_4'] == '2') {
                $newData[$key]['q1_4'] = '2';
            } else if ($item['q1_4'] == '40대' || $item['q1_4'] == '3') {
                $newData[$key]['q1_4'] = '3';
            } else if ($item['q1_4'] == '50대' || $item['q1_4'] == '4') {
                $newData[$key]['q1_4'] = '4';
            } else if ($item['q1_4'] == '60대' || $item['q1_4'] == '5') {
                $newData[$key]['q1_4'] = '5';
            }

            if ($item['q2_1_1'] == '예' || $item['q2_1_1'] == '1') {
                $newData[$key]['q2_1_1'] = '1';
            } else if ($item['q2_1_1'] == '아니오' || $item['q2_1_1'] == '2') {
                $newData[$key]['q2_1_1'] = '2';
            } else if ($item['q2_1_1'] == '아직 결정하지 않았음' || $item['q2_1_1'] == '3') {
                $newData[$key]['q2_1_1'] = '3';
            }

            $q2_1_2_pre = explode(",", $item['q2_1_2']);
            $q2_1_2_pre_data = "";
            foreach ($q2_1_2_pre as $q2_1_2) {
                if ($this->compareString($q2_1_2, "1. 주간 강좌") == 'same' || $q2_1_2 == '1') {
                    $q2_1_2_pre_data .= '1, ';
                }
                if ($this->compareString($q2_1_2, "2. 토요일 강좌") == 'same' || $q2_1_2 == '2') {
                    $q2_1_2_pre_data .= '2, ';
                }
                if ($this->compareString($q2_1_2, "3. 비대면(온라인) 강좌") == 'same' || $q2_1_2 == '3') {
                    $q2_1_2_pre_data .= '3, ';
                }
                if ($this->compareString($q2_1_2, "4. 계절학기(하계, 동계) 강좌") == 'same' || $q2_1_2 == '4') {
                    $q2_1_2_pre_data .= '4, ';
                }
            }
            $newData[$key]['q2_1_2'] = $q2_1_2_pre_data;

            $sq5_1_pre = explode("],", $item['sq5_1']);
            $string = str_replace('[', '', $sq5_1_pre);
            $sq5_1_pre_data = '';
            foreach ($string as $sq5) {;
                if ($this->compareString($sq5,'1. 영농계획 수립, 입지선정, 시설 유형 선택, 시설구조 설계, 부대시설 설계 등') == 'same' || $sq5 == '1') {
                    $sq5_1_pre_data .= '1, ';
                }
                if ($this->compareString($sq5,'2. 기반정비, 시설구조 시공, 설비 시공 등') == 'same' || $sq5 == '2') {
                    $sq5_1_pre_data .= '2, ';
                }
                if ($this->compareString($sq5, "3. 센서노드(온도, 습도, CO2, 토양, 양액 등 측정 센서), 제어기노드(환기, 난방, 차광, 보온, 관수, 관비 등 장치 구동 제어), 정보관리 시스템 등") == 'same' || $sq5 == '3') {
                    $sq5_1_pre_data .= '3, ';
                }
                if ($this->compareString($sq5, '4.식물(작물)에 따른 온도, 습도, 광, CO2시비 등의 복합환경제어 및 관리') == 'same' || $sq5 == '4') {
                    $sq5_1_pre_data .= '4, ';
                }
                if ($this->compareString($sq5,'5. 식물(작물)에 따른 수경재배, 양액조제, 토양관리, 근권부생육환경 관리 등의 복합환경제어 및 관리') == 'same' || $sq5 == '5') {
                    $sq5_1_pre_data .= '5, ';
                }
                if ($this->compareString($sq5, '6. 식물 생육관리의 이해와 활용 식물(작물)에 따른 병충해관리, 생리장해관리 등') == 'same' || $sq5 == '6') {
                    $sq5_1_pre_data .= '6, ';
                }
                if ($this->compareString($sq5, '7. 식물(작물)에 따른 상토제조, 파종, 접목, 묘 환경관리 등') == 'same' || $sq5 == '7') {
                    $sq5_1_pre_data .= '7, ';
                }
                if ($this->compareString($sq5,'8. 원예 작물, 화훼작물, 과수작물, 조경수 및 정원수 등에 따른 스마트팜 기술의 실제 적용') == 'same' || $sq5 == '8') {
                    $sq5_1_pre_data .= '8, ';
                }
            }
            $newData[$key]['sq5_1'] = $sq5_1_pre_data;


            $sq5_2_pre = explode(",", $item['sq5_2']);
            $sq5_2_pre_data = '';
            foreach ($sq5_2_pre as $key5_2 => $sq5_2) {
                if ($this->compareString($sq5_2,'1. 실무 적합형 이론') == 'same' || $sq5_2 == '1') {
                    $sq5_2_pre_data .= '1, ';
                } else if ($this->compareString($sq5_2,'2. 현장 적합형 실무능력') == 'same' || $sq5_2 == '2') {
                    $sq5_2_pre_data .= '2, ';
                }
                if ($this->compareString($sq5_2,'3. 자격증 보유 등의 전문성') == 'same' || $sq5_2 == '3') {
                    $sq5_2_pre_data .= '3, ';
                }
                if ($this->compareString($sq5_2,'4. 직업관, 윤리관 등의 인성') == 'same' || $sq5_2 == '4') {
                    $sq5_2_pre_data .= '4, ';
                }
                if ($this->compareString($sq5_2,'5. 조직 적응력 및 커뮤니케이션 능력') == 'same' || $sq5_2 == '5') {
                    $sq5_2_pre_data .= '5, ';
                }
                if ($this->compareString($sq5_2,'6. 컴퓨터 활용 능력 탁월') == 'same' || $sq5_2 == '6') {
                    $sq5_2_pre_data .= '6, ';
                }
                if ($this->compareString($sq5_2,'7. 창의적인 업무 처리 능력') == 'same' || $sq5_2 == '7') {
                    $sq5_2_pre_data .= '7, ';
                }
                if ($this->compareString($sq5_2,'8. 최신 기술 트렌드') == 'same' || $sq5_2 == '8') {
                    $sq5_2_pre_data .= '8, ';
                }
                if ($this->compareString($sq5_2,'9. 체계적인 실험 및 실습') == 'same' || $sq5_2 == '9') {
                    $sq5_2_pre_data .= '9, ';
                }
            }
            $newData[$key]['sq5_2'] = $sq5_2_pre_data;


            $sq5_3_pre = explode(",", $item['sq5_3']);
            $sq5_3_pre_data = '';
            foreach ($sq5_3_pre as $key5_3 => $sq5_3) {
                if ($this->compareString($sq5_3, '1. 다양한 교수법의 도입') == 'same' || $sq5_3 == '1') {
                    $sq5_3_pre_data .= '1, ';
                }
                if ($this->compareString($sq5_3, '2. 교육 교재 및 교보재 개선') == 'same' || $sq5_3 == '2') {
                    $sq5_3_pre_data .= '2, ';
                }
                if ($this->compareString($sq5_3, '3. 학생 참여 수업 확대') == 'same' || $sq5_3 == '3') {
                    $sq5_3_pre_data .= '3, ';
                }
                if ($this->compareString($sq5_3,  '4. 실험실습 비중의 확대') == 'same' || $sq5_3 == '4') {
                    $sq5_3_pre_data .= '4, ';
                }
                if ($this->compareString($sq5_3, '5. 전공분야 최신 기술의 신속 도입') == 'same' || $sq5_3 == '5') {
                    $sq5_3_pre_data .= '5, ';
                }
                if ($this->compareString($sq5_3, '6. 다양한 학생 평가방법 도입') == 'same' || $sq5_3 == '6') {
                    $sq5_3_pre_data .= '6, ';
                }
                if ($this->compareString($sq5_3, '7. 융복합 교육방법의 도입') == 'same' || $sq5_3 == '7') {
                    $sq5_3_pre_data .= '7, ';
                }
                if ($this->compareString($sq5_3, '8. 다양한 교육 매체의 활용') == 'same' || $sq5_3 == '8') {
                    $sq5_3_pre_data .= '8, ';
                }
            }
            $newData[$key]['sq5_3'] = $sq5_3_pre_data;
        }

        /*echo "<pre>";
        print_r($newData);
        echo "</pre>";*/

        $this->db->select("TRUNCATE TABLE poll_graduate_education_stat_votes");

        foreach ($newData as $ndata) {
            $added = $this->db->insert('poll_graduate_education_stat_votes', $ndata);  // Table name, column names and respective values

            if ($added) {
                echo true;
            } else {
                echo false;
            }
        }
    }

    public function compareString($string1, $string2) {
        $stringPre1 = preg_replace('/\s+/', '', $string1);
        $stringPre2 = preg_replace('/\s+/', '', $string2);

        $result = strcmp($stringPre1, $stringPre2);

        if($result < 0) // string1 is shorter than string2
        {
            return str_replace($string1, '', $string2);
        }
        elseif($result > 0) // string 2 is shorter than string 1
        {
            return str_replace($string2, '', $string1);
        }
        else  // They're the same, return an empty string
            return 'same';
    }
}