<?php

namespace app\component;

class DXConst extends \yii\base\Object
{
	const ERROR_INVALID = -1;

	const ERROR_PARAM_NOT_SET = 1;
	const ERROR_TOKEN_INVALID = 2;

	const ERROR_WRONG_TYPE = 3;
	const ERROR_WRONG_USERNAME = 4;
    const ERROR_WRONG_PASSWORD = 5;

	const ERROR_MODEL_ERROR = 6;
	const ERROR_USER_NOT_EXIST = 7;
	const ERROR_USER_EXIST = 8;
	const ERROR_USERNAME_ILLEGAL = 9;

	const ERROR_MSG_INVALID_TYPE = 10;
	const ERROR_CURRENT_MEETING_NOT_EXIST = 11;

	const ERROR_ANSWER_EXIST = 12;

	const TOKEN_TYPE_IOS = 1;
	const TOKEN_TYPE_ANDROID = 2;
	const TOKEN_TYPE_AIR = 3;

	const TOKEN_STATUS_INVALID = 0;
	const TOKEN_STATUS_VALID = 1;

	const POST_STATUS_PRIVATE = 0;
	const POST_STATUS_PUBLIC = 1;
	const POST_STATUS_PROMOTED = 2;

	const MEETING_STATUS_VALID = 1;
	const MEETING_STATUS_INVALID = 0;
	const MEETING_STATUS_END = 2;

	const ACTION_RATE_COMMON = 1;
	const ACTION_RATE_MEETING = 2;
	const ACTION_RATE_EMOTION = 3;

	const MESSAGE_PROCESS_BASE = 10000;
	const PROCESS_HEART = 0;
	const PROCESS_CHANGE_MODULE = 1;
	const PROCESS_CHANGE_SPEAKER = 2;
	const PROCESS_CANCEL_SPEAKER = 3;
	const PROCESS_APPLY_SPEAK_CHANGE = 4;
	const PROCESS_CHOOSE_APPLY_SPEAKER = 5;
	const PROCESS_QUIT_SUB_MODULE = 6;
	const PROCESS_TIME_ALERT = 7;
	const PROCESS_VOTE_STAT_UPDATE = 8;

	const MESSAGE_NOTIFY = 1;
	const MESSAGE_SYSTEM = 2;


	


	const MEETING_MEMBER_HOST = 1;
	const MEETING_MEMBER_COMMON = 2;
	const MEETING_MEMBER_ASSISTANT = 3;
	const MEETING_MEMBER_COMMENTATOR = 4;
	const MEETING_MEMBER_RECORDER = 5;

  	const MODULE_SELF_INTRODUCTION = 1;
    const MODULE_SHARE_SUGGESTION = 2;
    const MODULE_BEGIN_MEETING = 3;
    const MODULE_RELAX = 4;
    const MODULE_CHOOSE_TOPIC = 5;
    const MODULE_EXPOUND_TOPIC = 6;
    const MODULE_EXPLORATION_TOPIC = 7;
    const MODULE_FEEDBACK = 8;
    const MODULE_SELF_SUMMARY = 9;

	const MEETING_SUB_MODULE_QUESTIONNAIRE = 1;
	const MEETING_SUB_MODULE_VOTE = 2;
	const MEETING_SUB_MODULE_POST = 3;

	
	const QUESTION_QUESTIONAIRE = 1;
	const QUESTION_VOTE = 2;

	const PAPER_QUESTIONNAIRE = 1;
	const PAPER_VOTE = 2;

}