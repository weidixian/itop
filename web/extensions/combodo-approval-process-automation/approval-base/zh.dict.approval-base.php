<?php
// Copyright (C) 2012-2014 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
	'Approval:Tab:Title' => '审核状态',
	'Approval:Tab:Start' => '开始',
	'Approval:Tab:End' => '结束',
	'Approval:Tab:StepEnd-Limit' => '时间限制 (implicit result)',
	'Approval:Tab:StepEnd-Theoretical' => 'Theoretical time limit (duration limited to %1$s mn)',
	'Approval:Tab:StepSumary-Ongoing' => 'Waiting for the replies',
	'Approval:Tab:StepSumary-OK' => '批准',
	'Approval:Tab:StepSumary-KO' => '已驳回',
	'Approval:Tab:StepSumary-OK-Timeout' => '已批准 (超时)',
	'Approval:Tab:StepSumary-KO-Timeout' => '已驳回 (超时)',
	'Approval:Tab:StepSumary-Idle' => 'Not started',
	'Approval:Tab:StepSumary-Skipped' => '已跳过',
	'Approval:Tab:End-Abort' => 'The approval process has been bypassed by %1$s at %2$s',

	'Approval:Tab:StepEnd-Condition-FirstReject' => 'This step finishes on the first rejection, or if 100% approved',
	'Approval:Tab:StepEnd-Condition-FirstApprove' => 'This step finishes on the first approval, or if 100% rejected',
	'Approval:Tab:StepEnd-Condition-FirstReply' => 'This step finishes on the first reply',
	'Approval:Tab:Error' => 'An error occured during the approval process: %1$s',

	'Approval:Comment-Label' => 'Your comment',
	'Approval:Comment-Tooltip' => 'Mandatory for rejection, optional for approval',
	'Approval:Comment-Mandatory' => 'A comment must be given for rejection',
	'Approval:Comment-Reused' => 'Reply already made at step %1$s, with comment "%2$s"',
	'Approval:Action-Approve' => '批准',
	'Approval:Action-Reject' => '驳回',
	'Approval:Action-ApproveOrReject' => '批准或驳回',
	'Approval:Action-Abort' => '跳过审批流程',

	'Approval:Form:Title' => '审批',
	'Approval:Form:Ref' => '%1$s 的审批流程',

	'Approval:Form:ApproverDeleted' => 'Sorry, the record corresponding to your identity has been deleted.',
	'Approval:Form:ObjectDeleted' => 'Sorry, the object of the approval has been deleted.',

	'Approval:Form:AnswerGivenBy' => 'Sorry, the reply has already been given by \'%1$s\'', 
	'Approval:Form:AlreadyApproved' => 'Sorry, the process has already been completed with result: Approved.',
	'Approval:Form:AlreadyRejected' => 'Sorry, the process has already been completed with result: Rejected.',

	'Approval:Form:StepApproved' => 'Sorry, this phase has been completed with result: Approved. The approval process is continuing...',
	'Approval:Form:StepRejected' => 'Sorry, this phase has been completed with result: Rejected. The approval process is continuing...',

	'Approval:Abort:Explain' => 'You have requested to <b>bypass</b> the approval process. This will stop the process and none of the approvers will be allowed to give their answer anymore.',

	'Approval:Form:AnswerRecorded-Continue' => 'Your answer has been recorded. The approval process is continuing.',
	'Approval:Form:AnswerRecorded-Approved' => 'Your answer has been recorded: the approval process is now complete with result APPROVED.',
	'Approval:Form:AnswerRecorded-Rejected' => 'Your answer has been recorded: the approval process is now complete with result REJECTED.',

	'Approval:Approved-On-behalf-of' => '被 %1$s 以 %2$s 的身份批准',
	'Approval:Rejected-On-behalf-of' => '被 %1$s 以 %2$s 的身份驳回',
	'Approval:Approved-By' => '被 %1$s 批准',
	'Approval:Rejected-By' => '被 %1$s 驳回',

	'Approval:Ongoing-Title' => '正在进行的审批',
	'Approval:Ongoing-Title+' => '%1$s 的审批流程',
	'Approval:Ongoing-FilterMyApprovals' => '显示需要我审批的项目',
	'Approval:Ongoing-NothingCurrently' => '没有正在进行的审批.',

	'Approval:Remind-Btn' => 'Send a reminder...',
	'Approval:Remind-DlgTitle' => 'Send a reminder',
	'Approval:Remind-DlgBody' => 'The following contacts will be notified again:',
	'Approval:ReminderDone' => 'A reminder has been sent to %1$d person(s).',

	'Approval:Portal:Title' => 'Items awaiting your approval',
	'Approval:Portal:Title+' => 'Please select items to approve and use the buttons located at the bottom of the page',
	'Approval:Portal:NoItem' => 'There is currently no item expecting your approval',
	'Approval:Portal:Btn:Approve' => 'Approve',
	'Approval:Portal:Btn:Reject' => 'Reject',
	'Approval:Portal:CommentTitle' => 'Approval comment (mandatory in case of reject)',
	'Approval:Portal:CommentPlaceholder' => '',
	'Approval:Portal:Success' => 'Your feedback has been recorded.',
	'Approval:Portal:Dlg:Approve' => 'Please confirm that you want to approve <em><span class="approval-count">?</span></em> item(s)',
	'Approval:Portal:Dlg:ApproveOne' => 'Please confirm that you want to approve this item',
	'Approval:Portal:Dlg:Btn:Approve' => 'Approve!',
	'Approval:Portal:Dlg:Reject' => 'Please confirm that you want to reject <em><span class="approval-count">?</span></em> item(s)',
	'Approval:Portal:Dlg:RejectOne' => 'Please confirm that you want to reject this item',
	'Approval:Portal:Dlg:Btn:Reject' => 'Reject!',

	'Class:TriggerOnApprovalRequest' => '触发器 (when an approval is requested)',
	'Class:TriggerOnApprovalRequest+' => 'Trigger on approval request',
	'Class:ActionEmailApprovalRequest' => 'Email approval request',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder' => '主题 (reminder)',
	'Class:ActionEmailApprovalRequest/Attribute:subject_reminder+' => 'Subject of the email in case a reminder is sent',
));
