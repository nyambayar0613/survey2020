
<p class="alert alert-primary">
    다음은 귀하가 느끼시는 대학의 <b><u>전반적인 만족도 수준</u></b>을 묻는 문항입니다. 귀하의 생각과 가장 가까운 번호를 골라 1에서 5까지의
    숫자 중에서 선택해 주시기 바랍니다.
</p>

<div class="middle">

        <div class="card-body">
            <!-- Question 3.1 -->
            <p>
                1. 귀하가 <b><u>졸업한 전공 학과에</b></u> 대해 전반적으로 얼마나 만족하십니까?
            </p>
            <table class="table table-bordered table-responsive center">
                <thead class="thead-default">
                <tr>
                    <th >매우 불만족하다</th>
                    <th >불만족하다</th>
                    <th>보통이다</th>
                    <th >만족하다</th>
                    <th >매우 만족하다</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_1" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>

                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_1" value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_1" value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_1" value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_1" value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- Question 3.2 -->
            <p>
                2. 귀하는 <b><u>연암대학교에</b></u> 대해 전반적으로 얼마나 만족하십니까?
            </p>
            <table class="table table-bordered table-responsive center">
                <thead class="thead-default">
                <tr>
                    <th >매우 불만족하다</th>
                    <th >불만족하다</th>
                    <th>보통이다</th>
                    <th >만족하다</th>
                    <th >매우 만족하다</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_2" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>

                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_2" value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_2" value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_2" value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_2" value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>

            <!-- Question 3.3 -->
            <p>
                3. 후배나 주위사람들이 전문대학에 진학하려고할 때, <b><u>연암대학교를 추천할</b></u> 생각이 있습니까?
            </p>
            <table class="table table-bordered table-responsive center">
                <thead class="thead-default">
                <tr>
                    <th style="width: 26%">매우 그렇지 않다</th>
                    <th >그렇지 않다</th>
                    <th>보통이다</th>
                    <th >그렇다</th>
                    <th >매우 그렇다</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_3" value="1" />
                            <div class=" box">
                                <span>1</span>
                            </div>
                        </label>
                    </td>

                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_3" value="2" />
                            <div class=" box">
                                <span>2</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_3" value="3" />
                            <div class=" box">
                                <span>3</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_3" value="4" />
                            <div class=" box">
                                <span>4</span>
                            </div>
                        </label>
                    </td>
                    <td>
                        <label>
                            <input type="radio" v-model="questions.q3_3" value="5" />
                            <div class=" box">
                                <span>5</span>
                            </div>
                        </label>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

</div>