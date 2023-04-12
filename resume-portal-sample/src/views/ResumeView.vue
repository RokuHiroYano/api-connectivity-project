<script setup lang="ts">
import { useRoute, useRouter, RouterLink } from 'vue-router'
import { ref } from "vue";
import { onMounted } from 'vue';
import { inject } from 'vue';

const isEdit = ref(false);

const name = ref();
const name_furigana = ref();
const gender = ref();
const age = ref();
const route = ref();
const near_station = ref();
const license_year_1 = ref();
const license_name_1 = ref();
const licenseYear2 = ref();
const licenseName2 = ref();
const licenseYear3 = ref();
const licenseName3 = ref();
const knowledge = ref();
const pr = ref();
const start_date_1 = ref();
const end_date_1 = ref();
const occupation_1 = ref();
const job_duties_1 = ref();
const tools_1 = ref();

const axios = inject('axios');

onMounted(async () => {
  const response = await axios.get('/1');
  axios.get('/1').then(response => {
    name.value = response.data[0].name;
    name_furigana.value = response.data[0].name_furigana;
    gender.value = response.data[0].gender;
    age.value = response.data[0].age;
    route.value = response.data[0].route;
    near_station.value = response.data[0].near_station;
    license_year_1.value = response.data[0].license_year_1;
    license_name_1.value = response.data[0].license_name_1;
    knowledge.value = response.data[0].knowledge;
    pr.value = response.data[0].pr;
    start_date_1.value = response.data[0].start_date_1;
    occupation_1.value = response.data[0].occupation_1;
    job_duties_1.value = response.data[0].job_duties_1;
    tools_1.value = response.data[0].tools_1;
  }).catch(error => {
    console.log(error);
  });
});

const changeIsEdit = (index: number) => {
  isEdit.value = !isEdit.value;
  if (isEdit.value === false) {
    const memberProfile = {
      "name": name.value,
      "name_furigana": name_furigana.value,
      "gender": gender.value,
      "age": age.value,
      "route": route.value,
      "near_station": near_station.value,
      "license_year_1": license_year_1.value,
      "license_name_1": license_name_1.value,
      "knowledge": knowledge.value,
      "pr": pr.value,
      "start_date_1": start_date_1.value,
      // "end_date_1":
      "occupation_1": occupation_1.value,
      "job_duties_1": job_duties_1.value,
      "tools_1": tools_1.value
    };
    axios.put('/1', memberProfile).then(response => {
    }).catch(error => {
      console.log(error);
    });;
  }
};

// const memberProfile = {
//   "name": name.value,
//   "name_furigana": name_furigana.value,
//   "gender": gender.value,
//   "age": age.value,
//   "route": route.value,
//   "near_station": near_station.value,
//   "license_year_1": license_year_1.value,
//   "license_name_1": license_name_1.value,
//   "knowledge": knowledge.value,
//   "pr": pr.value,
//   "start_date_1": start_date_1.value,
//   // "end_date_1":
//   "occupation_1": occupation_1.value,
//   "job_duties_1": job_duties_1.value,
//   "tools_1": tools_1.value
// };
// axios.post('/', memberProfile).then(response => {
//     }).catch (error => {
//   console.log(error);
// });

</script>

<template>
  <div class="saveBtn mb-5" style="display: flex; justify-content: center;">
    <v-btn :variant="isEdit ? 'outlined' : 'elevated'" color="blue" @click="changeIsEdit">
      {{ !isEdit ? "編集する" : "保存する" }}
    </v-btn>
  </div>
  <section class="page">
    <table>
      <colgroup>
        <col style="width:2%;">
        <col style="width:9%;">
        <col style="width:12%;">
        <col style="width:17%;">
        <col style="width:15%;">
        <col style="width:15%;">
        <col style="width:10%;">
        <col style="width:20%;">
      </colgroup>
      <tbody>
        <tr class="profile-row">
          <td class="center" style="font-size:1.5rem; font-weight: bold;" colspan="8">スキルシート</td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">ふりがな</td>
          <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name-furigana">
            <div v-if="!isEdit">
              {{ name_furigana }}
            </div>
            <div v-if="isEdit">
              <input v-model="name_furigana" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">性別</td>
          <td class="bd-t-s bd-l-s bd-r-s" id="gender">
            <div v-if="!isEdit">
              {{ gender }}
            </div>
            <div v-if="isEdit">
              <select v-model="gender">
                <option value="">--選択--</option>
                <option value="男">男</option>
                <option value="女">女</option>
                <option value="その他">その他</option>
              </select>
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">年齢</td>
          <td class="bd-t-s bd-l-s bd-r-s" id="age">
            <div v-if="!isEdit">
              {{ age }}
            </div>
            <div v-if="isEdit">
              <input v-model="age" type="number" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2">氏名</td>
          <td class="bd-t-s bd-l-s bd-r-s" colspan="2" id="name">
            <div v-if="!isEdit">
              {{ name }}
            </div>
            <div v-if="isEdit">
              <input v-model="name" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">路線</td>
          <td class="bd-t-s bd-l-s bd-r-s" id="route">
            <div v-if="!isEdit">
              {{ route }}
            </div>
            <div v-if="isEdit">
              <input v-model="route" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">最寄駅</td>
          <td class="bd-t-s bd-l-s bd-r-s" id="near-station">
            <div v-if="!isEdit">
              {{ near_station }}
            </div>
            <div v-if="isEdit">
              <input v-model="near_station" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2" rowspan="4">資格</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="5">名称</td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s" id="license-year-1">
            <div v-if="!isEdit">
              {{ license_year_1 }}
            </div>
            <div v-if="isEdit">
              <input type="month" v-model="license_year_1" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s" id="license-name-1" colspan="5">
            <div v-if="!isEdit">
              {{ license_name_1 }}
            </div>
            <div v-if="isEdit">
              <input v-model="license_name_1" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2">
            <div v-if="!isEdit">
              {{ licenseYear2 }}
            </div>
            <div v-if="isEdit">
              <input type="month" v-model="licenseYear2" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s" id="license-year-2" colspan="5">
            <div v-if="!isEdit">
              {{ licenseName2 }}
            </div>
            <div v-if="isEdit">
              <input v-model="licenseName2" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3">
            <div v-if="!isEdit">
              {{ licenseYear3 }}
            </div>
            <div v-if="isEdit">
              <input type="month" v-model="licenseYear3" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s" id="license-year-3" colspan="5">
            <div v-if="!isEdit">
              {{ licenseName3 }}
            </div>
            <div v-if="isEdit">
              <input v-model="licenseName3" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="2" rowspan="2">経験・知識</td>
          <td class="bd-t-s bd-l-s bd-r-s" style="vertical-align: middle;" colspan="6" rowspan="2" valign="top"
            id="knowledge">
            <div v-if="!isEdit">
              {{ knowledge }}
            </div>
            <div v-if="isEdit">
              <textarea v-model="knowledge" style="caret-color: auto; width: 100%; height: 60px; resize: none;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue" colspan="2" rowspan="2">自己PR</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s" style=" vertical-align:middle;" colspan="6" rowspan="2" valign="top"
            id="pr">
            <div v-if="!isEdit">
              {{ pr }}
            </div>
            <div v-if="isEdit">
              <textarea v-model="pr" style="caret-color: auto; width: 100%; height: 60px; resize: none;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row">
          <td class="bd-t-s bd-l-s bd-r-s blue" style="font-size: 5px; padding: 0;">No.</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">年月</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">業種/職種</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue" colspan="4">業務内容</td>
          <td class="bd-t-s bd-l-s bd-r-s center blue">ツール類</td>
        </tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">1</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center year" rowspan="3">
            <div v-if="!isEdit">
              {{ start_date_1 }}
            </div>
            <div v-if="isEdit">
              <input type="month" v-model="start_date_1" style="caret-color: auto; width: 100%;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center kind" rowspan="3">
            <div v-if="!isEdit">
              {{ occupation_1 }}
            </div>
            <div v-if="isEdit">
              <textarea v-model="occupation_1" style="caret-color: auto; width: 100%; height: 60px; resize: none;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" style="vertical-align: middle;" colspan="4" rowspan="3"
            valign="top">
            <div v-if="!isEdit">
              {{ job_duties_1 }}
            </div>
            <div v-if="isEdit">
              <textarea v-model="job_duties_1" style="caret-color: auto; width: 100%; height: 60px; resize: none;" />
            </div>
          </td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center tips" rowspan="3" valign="top">
            <div v-if="!isEdit">
              {{ tools_1 }}
            </div>
            <div v-if="isEdit">
              <textarea v-model="tools_1" style="caret-color: auto; width: 100%; height: 60px; resize: none;" />
            </div>
          </td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">2</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">3</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">4</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">5</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row history-row">
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s center blue index" style="font-size: 5px; padding: 0;" rowspan="3">6</td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s year" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s kind" rowspan="3"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s value" colspan="4" rowspan="3" valign="top"></td>
          <td class="bd-t-s bd-l-s bd-r-s bd-b-s tips" rowspan="3" valign="top"></td>
        </tr>
        <tr class="profile-row"></tr>
        <tr class="profile-row"></tr>
      </tbody>
    </table>
  </section>
</template>

<style scoped>
.wrap {
  margin: 5% auto;
}

.page {
  background: white;
  width: 210mm;
  height: 297mm;
  box-sizing: border-box;
  padding: 10mm;
  page-break-after: always;
  margin: 0 auto;
}

.page:last-child {
  page-break-after: auto;
}

.profile-body {
  background: rgb(204, 204, 204) !important;
  font-size: 80%;
}

.profile-row {
  height: 30px;
  font-size: 8px;
}

table {
  width: 100%;
  border-collapse: collapse;
  table-layout: fixed;
}

td {
  padding: 0 10px;
}

.bd-t-s {
  border-top: 1px solid;
}

.bd-r-s {
  border-right: 1px solid;
}

.bd-b-s {
  border-bottom: 1px solid;
}

.bd-l-s {
  border-left: 1px solid;
}

.bd-t-dt {
  border-top: 1px dotted;
}

.bd-r-dt {
  border-right: 1px dotted;
}

.bd-b-dt {
  border-bottom: 1px dotted;
}

.bd-l-dt {
  border-left: 1px dotted;
}

.bd-t-db {
  border-top: 4px double;
}

.center {
  text-align: center;
  vertical-align: middle;
}

.blue {
  background-color: #C2D5EC !important;
}
</style>
