<?php


class industry_education_model extends  Model {
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
                    if ($key == 'sq2_1') {
                        if (isset($value[0]) && $value[0] != NULL) {
                            $arrayTypeVal .= '1) 비닐온실 ' .$value[0]. ' 평, ';
                        }

                        if (isset($value[1]) && $value[1] != NULL) {
                            $arrayTypeVal .= '2) 유리온실 ' .$value[1]. ' 평, ';
                        }

                        if (isset($value[2]) && $value[2] != NULL) {
                            $arrayTypeVal .= '3) 식물공장 ' .$value[2]. ' 평, ';
                        }

                        if (isset($value[3]) && isset($value[4])) {
                            $arrayTypeVal .= '4) 기타: ' .$value[3]. ' ' .$value[4].  ' 평, ';
                        }

                        //print_r($value);
                    } else {
                        foreach ($value as $k => $v) {
                            $arrayTypeVal .= $v.', ';
                        }
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
            $added = $this->db->insert('poll_industry_education_votes', $insertData);  // Table name, column names and respective values

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
        $query = $this->db->select("SELECT * FROM poll_industry_education_votes");

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


            if ($item['q1_5'] == '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)' || $item['q1_5'] == '1') {
                $newData[$key]['q1_5'] = '1';
            } else if ($item['q1_5'] == '중기업 (광업, 제조업, 건설업, 운송업 종업원 50~299인, 그외 업종 10~299인)' || $item['q1_5'] == '2') {
                $newData[$key]['q1_5'] = '2';
            } else if ($item['q1_5'] == '중견기업 (종업원 >300인, 혹은 매출 >400억, 상호 출자 제한 기업 집단 제외)' || $item['q1_5'] == '3') {
                $newData[$key]['q1_5'] = '3';
            } else if ($item['q1_5'] == '대기업 (종업원 >1000인, 혹은 매출 >1500억, 상호 출자 제한 기업 집단)' || $item['q1_5'] == '4') {
                $newData[$key]['q1_5'] = '4';
            }


            $sq1_pre = explode(",", $item['sq1']);
            //$string = str_replace('[', '', $sq1_pre);
            $sq1_pre_data = '';

            foreach ($sq1_pre as $sq1) {
                if ($this->compareString($sq1,'1. 종자·종묘') == 'same' || $sq1 == '1') {
                    $sq1_pre_data .= '1, ';
                } else if ($this->compareString($sq1,'2. 채소작물') == 'same' || $sq1 == '2') {
                    $sq1_pre_data .= '2, ';
                } else if ($this->compareString($sq1,'3. 화훼작물') == 'same' || $sq1 == '3') {
                    $sq1_pre_data .= '3, ';
                } else if ($this->compareString($sq1,'4. 특용작물') == 'same' || $sq1 == '4') {
                    $sq1_pre_data .= '4, ';
                } else if ($this->compareString($sq1,'5. 과수작물') == 'same' || $sq1 == '5') {
                    $sq1_pre_data .= '5, ';
                } else if ($this->compareString($sq1,'6. 컴퓨터 활용 능력 탁월') == 'same' || $sq1 == '6') {
                    $sq1_pre_data .= '6, ';
                } else if ($this->compareString($sq1,'7. 정원(가드닝)') == 'same' || $sq1 == '7') {
                    $sq1_pre_data .= '7, ';
                } else if ($this->compareString($sq1,'8. 식물보호제') == 'same' || $sq1 == '8') {
                    $sq1_pre_data .= '8, ';
                } else if ($this->compareString($sq1,'9. 스마트팜 설비·장치') == 'same' || $sq1 == '9') {
                    $sq1_pre_data .= '9, ';
                } else if ($this->compareString($sq1, '10. 식물공장') == 'same' || $sq1 == '10') {
                    $sq1_pre_data .= '10, ';
                }
            }

            $newData[$key]['sq1'] = $sq1_pre_data;

            if ($item['sq2'] == '있음' || $item['sq2'] == '1') {
                $newData[$key]['sq2'] = '1';
            } else if ($item['sq2'] == '없음' || $item['sq2'] == '2') {
                $newData[$key]['sq2'] = '2';
            }

            if ($item['sq3'] == '연암대학교 졸업생이 근무 중임' || $item['sq3'] == '1') {
                $newData[$key]['sq3'] = '1';
            } else if ($item['sq3'] == '산학협력 협약을 맺음(현장실습, 실습학기, 취업연계 약정 등' || $item['sq3'] == '2') {
                $newData[$key]['sq3'] = '2';
            } else if ($item['sq3'] == '관계없음' || $item['sq3'] == '3') {
                $newData[$key]['sq3'] = '3';
            }


            if ($item['sq3_1'] == '1) 스마트원예계열(원예, 스마트팜, 환경조경, 가드닝, 플로리스트 전공)' || $item['sq3_1'] == '1') {
                $newData[$key]['sq3_1'] = '1';
            } else if ($item['sq3_1'] == '2) 축산계열' || $item['sq3_1'] == '2') {
                $newData[$key]['sq3_1'] = '2';
            }

            if ($item['sq3_2'] == '1) 스마트원예계열(원예, 스마트팜, 환경조경, 가드닝, 플로리스트 전공) ' || $item['sq3_2'] == '2') {
                $newData[$key]['sq3_2'] = '1';
            } else if ($item['sq3_2'] == '2) 축산계열' || $item['sq3_2'] == '2') {
                $newData[$key]['sq3_2'] = '2';
            }

            if ($item['sq4_1_1'] == '예' || $item['sq4_1_1'] == '1') {
                $newData[$key]['sq4_1_1'] = '1';
            } else if ($item['sq4_1_1'] == '아니오' || $item['sq4_1_1'] == '2') {
                $newData[$key]['sq4_1_1'] = '2';
            } else if ($item['sq4_1_1'] == '아직 결정하지 않았음' || $item['sq4_1_1'] == '3') {
                $newData[$key]['sq4_1_1'] = '3';
            }


            $sq4_1_2_pre = explode(",", $item['sq4_1_2']);
            $sq4_1_2_pre_data = '';

            foreach ($sq4_1_2_pre as $sq4_1_2) {
                if ($this->compareString($sq4_1_2, '1. 주간 강좌') == 'same' || $sq4_1_2 == '1') {
                    $sq4_1_2_pre_data .= '1, ';
                } else if ($this->compareString($sq4_1_2, '2. 토요일 강좌') == 'same' || $sq4_1_2 == '2') {
                    $sq4_1_2_pre_data .= '2, ';
                } else if ($this->compareString($sq4_1_2, '3. 비대면(온라인) 강좌') == 'same' || $sq4_1_2 == '3') {
                    $sq4_1_2_pre_data .= '3, ';
                } else if ($this->compareString($sq4_1_2, '4. 계절학기(하계, 동계) 강좌') == 'same' || $sq4_1_2 == '4') {
                    $sq4_1_2_pre_data .= '4, ';
                }
            }

            $newData[$key]['sq4_1_2'] = $sq4_1_2_pre_data;

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

       $this->db->select("TRUNCATE TABLE poll_industry_education_stat_votes");




        foreach ($newData as $ndata) {
            $added = $this->db->insert('poll_industry_education_stat_votes', $ndata);  // Table name, column names and respective values

            if ($added) {
                echo true;
            } else {
                echo false;
            }
        }


        /*if($added){
            echo json_encode(['isSuccess'=> true]);
        } else {
            echo json_encode(['isSuccess'=> false]);
        }*/
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