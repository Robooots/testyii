#package.json
{
  "name": "calendar",
  "version": "1.0.1",
  "description": "This is a calendar demo",
  "main": "./dist/main.js",
  "scripts": {
    "test": "echo \"Error: no test specified\" && exit 1"
  },
  "keywords": [
    "typeScript"
  ],
  "author": "wangrui wwx415209",
  "license": "ISC",
  "devDependencies": {
    "gulp": "^3.9.1",
    "gulp-clean": "^0.3.2",
    "gulp-inject": "^4.3.0",
    "gulp-typescript": "^3.2.2",
    "typescript": "^2.4.2"
  },
  "dependencies": {}
}

#tsconfig.json
{ 
    "compilerOptions": {
        "target": "ES5",
        "lib":["es2016","dom"],
        "module": "AMD",
        "sourceMap": false,
        "experimentalDecorators": true,
        "outDir": "dist/js",
        "removeComments": false,
        "noImplicitAny": true
    },
    "includes": [
        "src/ts/**/*"
    ],
    "exclude" : [
        "node_modules/*"
    ]
}

#index.html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calendar</title>
  <!--inject:css-->
  <link rel="stylesheet" href="src/css/main.css">
  <!--endinject-->
</head>
<body>
  <div class="container">
    <div class="date-nav">
      <div class="year-select">
        <select name="year-select" id="yearSelect"></select>
      </div>
      <div class="month-select"></div>
    </div>
    <div class="date-panel">
      <div class="week-row">
        <div class="week-block">Sun</div>
        <div class="week-block">Mon</div>
        <div class="week-block">Tue</div>
        <div class="week-block">Wed</div>
        <div class="week-block">Thu</div>
        <div class="week-block">Fri</div>
        <div class="week-block">Sat</div>
      </div>
      <div class="day-panel">
        <div class="day-row">
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
        </div>
        <div class="day-row">
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
        </div>
        <div class="day-row">
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
        </div>
        <div class="day-row">
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
        </div>
        <div class="day-row">
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
          <div class="day-block">
            <div class="block-header">
              <h4 class="date-info"></h4>
              <span class="date-tips"></span>
            </div>
            <div class="block-body">
              <ul class="sign-time"></ul>
            </div>
            <div class="block-footer">
              <p class="day-type"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<!--inject:js-->
<script src="dist/js/calendar.js"></script>
<script src="dist/js/dateManager.js"></script>
<!--endinject-->
</html>

#calendar.ts

class Calendar {

  private WEEK_LENGTH = 6;
  private dateSet: DateManager[];

  constructor() {
    this.fillYearSelect();
    this.fillMonthSelect();
    this.initEvent();
  }

  private initEvent() {
    const superThis = this;
    const yearSelect = document.querySelector('.year-select select');
    yearSelect.onchange = this.query;
    const monthSelect = document.querySelector('.month-select');
    monthSelect.addEventListener('click', function(event) {
      event.target.className += ' selected';
      superThis.query();
    });

  }

  /**
   * 查询日期
   */
  private query() {
    const year = this.getSelectedYear();
    const month = this.getSelectedMonth();
    if (year === undefined || month === undefined) {
      return;
    }
    /**当月day对象集 */
    const currentMonthDaySet = this.queryRangeDay({year: year, month: month}, 'forward');
    /**用以补全的前一个月的day对象集 */
    const preMonthDayNumber = currentMonthDaySet[0].week;
    const preMonthDaySet = this.queryRangeDay({year: year, month: month - 1}, 'back', preMonthDayNumber);
    /**用以补全的下一个月的day对象集 */
    const nextMonthDayNumber = this.WEEK_LENGTH - currentMonthDaySet[currentMonthDaySet.length - 1].week;
    const nextMonthDaySet = this.queryRangeDay({year: year, month: month + 1}, 'back', preMonthDayNumber);
    this.dateSet = preMonthDaySet.concat(currentMonthDaySet).concat(nextMonthDaySet);
    this.fillDatePanel();
  }

  /**
   * 把所有DateManager对象填充到面板上
   */
  private fillDatePanel() {
    const dayBlocks = document.querySelectorAll('.date-panel .day-block');
    this.dateSet.forEach((dateMg, index) => {
      dayBlocks[index].querySelector('.date-info').innerHTML = dateMg.getDateString();
      dayBlocks[index].querySelector('.date-tips').innerHTML = dateMg.getDayTips();
      dayBlocks[index].querySelector('.day-type').innerHTML = dateMg.dayType === 'weekday' ? '工作日' : '周末';
      let signTimeHtml = '';
      dateMg.getSignTime().forEach((signTime) => {
        signTimeHtml += `<li>${signTime}</li>`;
      });
      dayBlocks[index].querySelector('.sign-time').innerHTML = signTimeHtml;
    });
  }

  /**
   * 填充年份选择器
   */
  private fillYearSelect() {
    const yearSelect = document.querySelector('.year-select select');
    const yearRange = this.getYearRange();
    let yearSelectHtml = '';
    for (let i = yearRange.startYear; i <= yearRange.endYear; i++) {
      yearSelectHtml += `<option value="${i}">${i}</option>`;
    }
    yearSelect.innerHTML = yearSelectHtml;
  }

  /**
   * 填充月份选择器
   */
  private fillMonthSelect() {
    const monthSelect = document.querySelector('.month-select');
    const monthRange = this.getMonthRange();
    let monthSelectHtml = '';
    for (let i = 0; i <= monthRange.length; i++) {
      monthSelectHtml += `<div class="month-block" data-value="${i}">${monthRange[i]}</div>`;
    }
    monthSelect.innerHTML = monthSelectHtml;
  }

  private getSelectedYear(): number {
    const yearSelected = document.querySelector('.year-select select').value;
    return parseInt(yearSelected, 10);
  }

  private getSelectedMonth(): number {
    const monthSelect = document.querySelector('.month-block.selected');
    if (monthSelect === null) {
      return;
    }
    return parseInt(monthSelect.getAttribute('data-value'), 10);
  }

  /**
   * 查询指定某月的几天
   * @param date 要查询的日期
   * @param queryDirection 查询的方向（是前几天还是后几天）
   * @param dayNumber 要查询的数量（默认查询当月所有天数）
   * @return {DateManager}
   */
  private queryRangeDay(date: {year: number, month: number},
     queryDirection: 'forward'|'back',
     dayNumber?: number): DateManager[] {
    if (date.month < 0) {
      date.month = 11;
      date.year--;
    } else if (date.month > 11) {
      date.month = 0;
      date.year++;
    }
    const dateInstance = new Date(date.year, date.month, 0);
    const daySet = [];
    for (let i = 1; i <= dateInstance.getDate(); i++) {
      daySet.push(new DateManager(date.year, date.month, i));
    }
    if (!dayNumber) {
      return daySet;
    }
    if (queryDirection === 'forward') {
      return daySet.slice(0, dayNumber);
    } else {
      return daySet.slice(0 - dayNumber, 0);
    }
  }

  /**
   * 获取日历上月份选择器的取值范围
   */
  private getMonthRange(): string[] {
    return [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December'
    ];
  }

  /**
   * 获取日历上年份选择框的取值范围
   */
  private getYearRange() {
    return {
      startYear: 2013,
      endYear: 2023
    };
  }

}

const calendar = new Calendar();


#dateManager.ts

class DateManager {
  private _year: number;
  private _month: number;
  private _day: number;
  private _week: number;
  private _dayType: string;

  public get week(): number {
    return this._week;
  }

  public get dayType(): string {
    return this._dayType;
  }

  constructor(year: number, month: number, day: number) {
    this._year = year;
    this._month = month;
    this._day = day;
    this._dayType = this.getDayType();
  }

  public getDateString() {
    return `${this.padStart(this._month + 1)}-${this.padStart(this._day)}`;
  }

  public getDayTips() {
    // TODO 获取文字
    return this._dayType === 'weekday' ? '辛苦了！' : '';
  }

  public getSignTime() {
    // TODO 获取时间
    return [
      '08:05:21',
      '19:30:15'
    ];
  }

  private getDayType() {
    const weekDay = new Date(this._year, this._month, this._day).getDay();
    this._week = weekDay;
    return [0, 6].includes(weekDay) ? 'weekend' : 'weekday';
  }

  private padStart(number: number) {
    if (number < 10) {
      return '0' + number.toString();
    }
    return number.toString();
  }
}


#main.css
*{
  margin: 0;
  padding: 0;
  font-family: Helvetica Neue,Helvetica,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Noto Sans CJK SC,WenQuanYi Micro Hei,Arial,sans-serif;
}

ul {
  list-style: none;
}
.container {
  display: flex;
}

.container .date-nav {
  width: 10vw;
}
.container .date-panel{
  width: 90vw;
}

.week-row {
  border-bottom: 1px solid #ddd;
}

.week-row, .day-row {
  display: flex;
  justify-content: space-around;
}

.week-block {
  text-align: center;
}

.week-block, .day-block {
  display: inline-block;
  margin: 3px;
  width: 14.2%;
}

.day-block {
  border: 1px solid #ddd;
  height: 110px;
  overflow: hidden;
  padding: 5px;
  position: relative;
}

.day-block .block-header {
  align-items: center;
  display: flex;
  justify-content: space-between;
  height: 20%;
  padding: 0 10px;
}

.day-block .block-header span.date-tips {
  background-color: #4aae4e;
  color: #fff;
  padding: 1px 2px;
  border-radius: 3px;
}

.day-block .block-body {
  align-items: center;
  display: flex;
  height: 60%;
  padding: 0 20px;
}

.day-block .block-footer .day-type{
  position: absolute;
  right: 0;
  bottom: 0;
  border-top: 1px solid #ddd;
  border-left: 1px solid #ddd;
}

