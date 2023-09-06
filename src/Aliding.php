<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddAttendeeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\AddWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CancelScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearDataShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ClearShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateVideoConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteColumnsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteRowsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\DeleteWorkspaceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetAllSheetsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMineWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRangeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportTemplateByNameShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetReportUnReadCountShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSheetShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetSpaceDirectoriesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetTemplateListByUserIdShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspaceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertColumnsBeforeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InsertRowsBeforeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InviteUsersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListCalendarsShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordTextShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoPlayInfoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryCloudRecordVideoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveInfoShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchDetailShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryLiveWatchUserListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomListShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryOrgTodoTasksShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ReceiverListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\RemoveAttendeeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SaveContentShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetColumnsVisibilityShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SetRowsVisibilityShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\SimpleListReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StartCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsListByTypeReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StatisticsReportShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\StopCloudRecordShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateLiveShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomGroupShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateMeetingRoomShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateRangeShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateScheduleConferenceShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceDocMembersShrinkRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersRequest;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersResponse;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkHeaders;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateWorkspaceMembersShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Aliding extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('aliding', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param AddAttendeeRequest $tmpReq
     * @param AddAttendeeHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return AddAttendeeResponse
     */
    public function addAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddAttendeeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddAttendeeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendeesToAdd)) {
            $request->attendeesToAddShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToAdd, 'AttendeesToAdd', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesToAddShrink)) {
            $body['AttendeesToAdd'] = $request->attendeesToAddShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddAttendee',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/addAttendee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddAttendeeRequest $request
     *
     * @return AddAttendeeResponse
     */
    public function addAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddAttendeeHeaders([]);

        return $this->addAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddWorkspaceRequest $tmpReq
     * @param AddWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return AddWorkspaceResponse
     */
    public function addWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/addWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceRequest $request
     *
     * @return AddWorkspaceResponse
     */
    public function addWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceHeaders([]);

        return $this->addWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddWorkspaceDocMembersRequest $tmpReq
     * @param AddWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceDocMembersRequest $request
     *
     * @return AddWorkspaceDocMembersResponse
     */
    public function addWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceDocMembersHeaders([]);

        return $this->addWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param AddWorkspaceMembersRequest $tmpReq
     * @param AddWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new AddWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new AddWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AddWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/addWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AddWorkspaceMembersRequest $request
     *
     * @return AddWorkspaceMembersResponse
     */
    public function addWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new AddWorkspaceMembersHeaders([]);

        return $this->addWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CancelScheduleConferenceRequest $tmpReq
     * @param CancelScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return CancelScheduleConferenceResponse
     */
    public function cancelScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CancelScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CancelScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/cancelScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelScheduleConferenceRequest $request
     *
     * @return CancelScheduleConferenceResponse
     */
    public function cancelScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CancelScheduleConferenceHeaders([]);

        return $this->cancelScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ClearRequest   $tmpReq
     * @param ClearHeaders   $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return ClearResponse
     */
    public function clearWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ClearShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ClearShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'Clear',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/clear',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClearRequest $request
     *
     * @return ClearResponse
     */
    public function clear($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearHeaders([]);

        return $this->clearWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ClearDataRequest $tmpReq
     * @param ClearDataHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return ClearDataResponse
     */
    public function clearDataWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ClearDataShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ClearDataShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ClearData',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/clearData',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ClearDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ClearDataRequest $request
     *
     * @return ClearDataResponse
     */
    public function clearData($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ClearDataHeaders([]);

        return $this->clearDataWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CommentListReportRequest $tmpReq
     * @param CommentListReportHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return CommentListReportResponse
     */
    public function commentListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CommentListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CommentListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CommentListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/commentListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CommentListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CommentListReportRequest $request
     *
     * @return CommentListReportResponse
     */
    public function commentListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CommentListReportHeaders([]);

        return $this->commentListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateEventRequest $tmpReq
     * @param CreateEventHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateEventResponse
     */
    public function createEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateEventShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendees)) {
            $request->attendeesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }
        if (!Utils::isUnset($tmpReq->end)) {
            $request->endShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        if (!Utils::isUnset($tmpReq->onlineMeetingInfo)) {
            $request->onlineMeetingInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->onlineMeetingInfo, 'OnlineMeetingInfo', 'json');
        }
        if (!Utils::isUnset($tmpReq->recurrence)) {
            $request->recurrenceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }
        if (!Utils::isUnset($tmpReq->reminders)) {
            $request->remindersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }
        if (!Utils::isUnset($tmpReq->uiConfigs)) {
            $request->uiConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->uiConfigs, 'UiConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->start)) {
            $request->startShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->start, 'start', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesShrink)) {
            $body['Attendees'] = $request->attendeesShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endShrink)) {
            $body['End'] = $request->endShrink;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['Extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->isAllDay)) {
            $body['IsAllDay'] = $request->isAllDay;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->onlineMeetingInfoShrink)) {
            $body['OnlineMeetingInfo'] = $request->onlineMeetingInfoShrink;
        }
        if (!Utils::isUnset($request->recurrenceShrink)) {
            $body['Recurrence'] = $request->recurrenceShrink;
        }
        if (!Utils::isUnset($request->remindersShrink)) {
            $body['Reminders'] = $request->remindersShrink;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        if (!Utils::isUnset($request->uiConfigsShrink)) {
            $body['UiConfigs'] = $request->uiConfigsShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['calendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->startShrink)) {
            $body['start'] = $request->startShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/createEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateEventRequest $request
     *
     * @return CreateEventResponse
     */
    public function createEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateEventHeaders([]);

        return $this->createEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateLiveRequest $tmpReq
     * @param CreateLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return CreateLiveResponse
     */
    public function createLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->preEndTime)) {
            $body['PreEndTime'] = $request->preEndTime;
        }
        if (!Utils::isUnset($request->preStartTime)) {
            $body['PreStartTime'] = $request->preStartTime;
        }
        if (!Utils::isUnset($request->publicType)) {
            $body['PublicType'] = $request->publicType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateLiveRequest $request
     *
     * @return CreateLiveResponse
     */
    public function createLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateLiveHeaders([]);

        return $this->createLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateMeetingRoomRequest $tmpReq
     * @param CreateMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return CreateMeetingRoomResponse
     */
    public function createMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLabelIds)) {
            $request->roomLabelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLocation)) {
            $request->roomLocationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isvRoomId)) {
            $body['IsvRoomId'] = $request->isvRoomId;
        }
        if (!Utils::isUnset($request->roomCapacity)) {
            $body['RoomCapacity'] = $request->roomCapacity;
        }
        if (!Utils::isUnset($request->roomLabelIdsShrink)) {
            $body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }
        if (!Utils::isUnset($request->roomLocationShrink)) {
            $body['RoomLocation'] = $request->roomLocationShrink;
        }
        if (!Utils::isUnset($request->roomName)) {
            $body['RoomName'] = $request->roomName;
        }
        if (!Utils::isUnset($request->roomPicture)) {
            $body['RoomPicture'] = $request->roomPicture;
        }
        if (!Utils::isUnset($request->roomStatus)) {
            $body['RoomStatus'] = $request->roomStatus;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMeetingRoomRequest $request
     *
     * @return CreateMeetingRoomResponse
     */
    public function createMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomHeaders([]);

        return $this->createMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateMeetingRoomGroupRequest $tmpReq
     * @param CreateMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->parentGroupId)) {
            $body['ParentGroupId'] = $request->parentGroupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateMeetingRoomGroupRequest $request
     *
     * @return CreateMeetingRoomGroupResponse
     */
    public function createMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateMeetingRoomGroupHeaders([]);

        return $this->createMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateReportRequest $tmpReq
     * @param CreateReportHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return CreateReportResponse
     */
    public function createReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->toCids)) {
            $request->toCidsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toCids, 'ToCids', 'json');
        }
        if (!Utils::isUnset($tmpReq->toUserids)) {
            $request->toUseridsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->toUserids, 'ToUserids', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->ddFrom)) {
            $body['DdFrom'] = $request->ddFrom;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->toChat)) {
            $body['ToChat'] = $request->toChat;
        }
        if (!Utils::isUnset($request->toCidsShrink)) {
            $body['ToCids'] = $request->toCidsShrink;
        }
        if (!Utils::isUnset($request->toUseridsShrink)) {
            $body['ToUserids'] = $request->toUseridsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/createReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateReportRequest $request
     *
     * @return CreateReportResponse
     */
    public function createReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateReportHeaders([]);

        return $this->createReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateScheduleConferenceRequest $tmpReq
     * @param CreateScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return CreateScheduleConferenceResponse
     */
    public function createScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateScheduleConferenceRequest $request
     *
     * @return CreateScheduleConferenceResponse
     */
    public function createScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateScheduleConferenceHeaders([]);

        return $this->createScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateSheetRequest $tmpReq
     * @param CreateSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return CreateSheetResponse
     */
    public function createSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateSheetRequest $request
     *
     * @return CreateSheetResponse
     */
    public function createSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateSheetHeaders([]);

        return $this->createSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTodoTaskRequest $tmpReq
     * @param CreateTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return CreateTodoTaskResponse
     */
    public function createTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contentFieldList)) {
            $request->contentFieldListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contentFieldList, 'contentFieldList', 'json');
        }
        if (!Utils::isUnset($tmpReq->detailUrl)) {
            $request->detailUrlShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->detailUrl, 'detailUrl', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->notifyConfigs)) {
            $request->notifyConfigsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->notifyConfigs, 'notifyConfigs', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->operatorId)) {
            $query['operatorId'] = $request->operatorId;
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->contentFieldListShrink)) {
            $body['contentFieldList'] = $request->contentFieldListShrink;
        }
        if (!Utils::isUnset($request->creatorId)) {
            $body['creatorId'] = $request->creatorId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->detailUrlShrink)) {
            $body['detailUrl'] = $request->detailUrlShrink;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['executorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->isOnlyShowExecutor)) {
            $body['isOnlyShowExecutor'] = $request->isOnlyShowExecutor;
        }
        if (!Utils::isUnset($request->notifyConfigsShrink)) {
            $body['notifyConfigs'] = $request->notifyConfigsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['participantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['sourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/createTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTodoTaskRequest $request
     *
     * @return CreateTodoTaskResponse
     */
    public function createTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateTodoTaskHeaders([]);

        return $this->createTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateVideoConferenceRequest $tmpReq
     * @param CreateVideoConferenceHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateVideoConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateVideoConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->inviteUserIds)) {
            $request->inviteUserIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inviteUserIds, 'InviteUserIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->confTitle)) {
            $body['ConfTitle'] = $request->confTitle;
        }
        if (!Utils::isUnset($request->inviteCaller)) {
            $body['InviteCaller'] = $request->inviteCaller;
        }
        if (!Utils::isUnset($request->inviteUserIdsShrink)) {
            $body['InviteUserIds'] = $request->inviteUserIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateVideoConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/createVideoConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateVideoConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateVideoConferenceRequest $request
     *
     * @return CreateVideoConferenceResponse
     */
    public function createVideoConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateVideoConferenceHeaders([]);

        return $this->createVideoConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceRequest $tmpReq
     * @param CreateWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceRequest $request
     *
     * @return CreateWorkspaceResponse
     */
    public function createWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceHeaders([]);

        return $this->createWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateWorkspaceDocRequest $tmpReq
     * @param CreateWorkspaceDocHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDocWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateWorkspaceDocShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new CreateWorkspaceDocShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->docType)) {
            $body['DocType'] = $request->docType;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->parentNodeId)) {
            $body['ParentNodeId'] = $request->parentNodeId;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->templateType)) {
            $body['TemplateType'] = $request->templateType;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateWorkspaceDoc',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/createWorkspaceDoc',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateWorkspaceDocResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateWorkspaceDocRequest $request
     *
     * @return CreateWorkspaceDocResponse
     */
    public function createWorkspaceDoc($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new CreateWorkspaceDocHeaders([]);

        return $this->createWorkspaceDocWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteColumnsRequest $tmpReq
     * @param DeleteColumnsHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteColumnsResponse
     */
    public function deleteColumnsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteColumnsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteColumnsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteColumns',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteColumns',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteColumnsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteColumnsRequest $request
     *
     * @return DeleteColumnsResponse
     */
    public function deleteColumns($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteColumnsHeaders([]);

        return $this->deleteColumnsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteEventRequest $request
     * @param DeleteEventHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteEventResponse
     */
    public function deleteEventWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new DeleteEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/deleteEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteEventRequest $request
     *
     * @return DeleteEventResponse
     */
    public function deleteEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteEventHeaders([]);

        return $this->deleteEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteLiveRequest $tmpReq
     * @param DeleteLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteLiveResponse
     */
    public function deleteLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteLiveRequest $request
     *
     * @return DeleteLiveResponse
     */
    public function deleteLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteLiveHeaders([]);

        return $this->deleteLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMeetingRoomRequest $tmpReq
     * @param DeleteMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMeetingRoomRequest $request
     *
     * @return DeleteMeetingRoomResponse
     */
    public function deleteMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomHeaders([]);

        return $this->deleteMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteMeetingRoomGroupRequest $tmpReq
     * @param DeleteMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/deleteMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteMeetingRoomGroupRequest $request
     *
     * @return DeleteMeetingRoomGroupResponse
     */
    public function deleteMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteMeetingRoomGroupHeaders([]);

        return $this->deleteMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteRowsRequest $tmpReq
     * @param DeleteRowsHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteRowsResponse
     */
    public function deleteRowsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteRowsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteRowsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteRows',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteRows',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteRowsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteRowsRequest $request
     *
     * @return DeleteRowsResponse
     */
    public function deleteRows($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteRowsHeaders([]);

        return $this->deleteRowsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteSheetRequest $tmpReq
     * @param DeleteSheetHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return DeleteSheetResponse
     */
    public function deleteSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteSheetRequest $request
     *
     * @return DeleteSheetResponse
     */
    public function deleteSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteSheetHeaders([]);

        return $this->deleteSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteTodoTaskRequest $tmpReq
     * @param DeleteTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return DeleteTodoTaskResponse
     */
    public function deleteTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/deleteTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteTodoTaskRequest $request
     *
     * @return DeleteTodoTaskResponse
     */
    public function deleteTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteTodoTaskHeaders([]);

        return $this->deleteTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteWorkspaceDocMembersRequest $tmpReq
     * @param DeleteWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWorkspaceDocMembersRequest $request
     *
     * @return DeleteWorkspaceDocMembersResponse
     */
    public function deleteWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceDocMembersHeaders([]);

        return $this->deleteWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteWorkspaceMembersRequest $tmpReq
     * @param DeleteWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new DeleteWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/deleteWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteWorkspaceMembersRequest $request
     *
     * @return DeleteWorkspaceMembersResponse
     */
    public function deleteWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new DeleteWorkspaceMembersHeaders([]);

        return $this->deleteWorkspaceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetAllSheetsRequest $tmpReq
     * @param GetAllSheetsHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetAllSheetsResponse
     */
    public function getAllSheetsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetAllSheetsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetAllSheetsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetAllSheets',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getAllSheets',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAllSheetsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetAllSheetsRequest $request
     *
     * @return GetAllSheetsResponse
     */
    public function getAllSheets($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetAllSheetsHeaders([]);

        return $this->getAllSheetsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetEventRequest $request
     * @param GetEventHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetEventResponse
     */
    public function getEventWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new GetEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->maxAttendees)) {
            $query['MaxAttendees'] = $request->maxAttendees;
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'query'   => OpenApiUtilClient::query($query),
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/getEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEventRequest $request
     *
     * @return GetEventResponse
     */
    public function getEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetEventHeaders([]);

        return $this->getEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetMineWorkspaceRequest $tmpReq
     * @param GetMineWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return GetMineWorkspaceResponse
     */
    public function getMineWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetMineWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetMineWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetMineWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getMineWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMineWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetMineWorkspaceRequest $request
     *
     * @return GetMineWorkspaceResponse
     */
    public function getMineWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetMineWorkspaceHeaders([]);

        return $this->getMineWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNodeRequest $tmpReq
     * @param GetNodeHeaders $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return GetNodeResponse
     */
    public function getNodeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        if (!Utils::isUnset($request->withStatisticalInfo)) {
            $body['WithStatisticalInfo'] = $request->withStatisticalInfo;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNode',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNode',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeRequest $request
     *
     * @return GetNodeResponse
     */
    public function getNode($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeHeaders([]);

        return $this->getNodeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNodeByUrlRequest $tmpReq
     * @param GetNodeByUrlHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetNodeByUrlResponse
     */
    public function getNodeByUrlWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodeByUrlShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodeByUrlShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->url)) {
            $body['Url'] = $request->url;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodeByUrl',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNodeByUrl',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodeByUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodeByUrlRequest $request
     *
     * @return GetNodeByUrlResponse
     */
    public function getNodeByUrl($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodeByUrlHeaders([]);

        return $this->getNodeByUrlWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNodesRequest $tmpReq
     * @param GetNodesHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetNodesResponse
     */
    public function getNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetNodesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->nodeIds)) {
            $request->nodeIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->nodeIds, 'NodeIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->nodeIdsShrink)) {
            $body['NodeIds'] = $request->nodeIdsShrink;
        }
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetNodes',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getNodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNodesRequest $request
     *
     * @return GetNodesResponse
     */
    public function getNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetNodesHeaders([]);

        return $this->getNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetRangeRequest $tmpReq
     * @param GetRangeHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetRangeResponse
     */
    public function getRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetRangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetRangeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->select)) {
            $body['Select'] = $request->select;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetRange',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getRange',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetRangeRequest $request
     *
     * @return GetRangeResponse
     */
    public function getRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetRangeHeaders([]);

        return $this->getRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetReportTemplateByNameRequest $tmpReq
     * @param GetReportTemplateByNameHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return GetReportTemplateByNameResponse
     */
    public function getReportTemplateByNameWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetReportTemplateByNameShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetReportTemplateByNameShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReportTemplateByName',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getReportTemplateByName',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReportTemplateByNameResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetReportTemplateByNameRequest $request
     *
     * @return GetReportTemplateByNameResponse
     */
    public function getReportTemplateByName($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportTemplateByNameHeaders([]);

        return $this->getReportTemplateByNameWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetReportUnReadCountRequest $tmpReq
     * @param GetReportUnReadCountHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return GetReportUnReadCountResponse
     */
    public function getReportUnReadCountWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetReportUnReadCountShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetReportUnReadCountShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetReportUnReadCount',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getReportUnReadCount',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetReportUnReadCountResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetReportUnReadCountRequest $request
     *
     * @return GetReportUnReadCountResponse
     */
    public function getReportUnReadCount($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetReportUnReadCountHeaders([]);

        return $this->getReportUnReadCountWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSheetRequest $tmpReq
     * @param GetSheetHeaders $tmpHeader
     * @param RuntimeOptions  $runtime
     *
     * @return GetSheetResponse
     */
    public function getSheetWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSheetShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetSheetShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSheet',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/getSheet',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSheetResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSheetRequest $request
     *
     * @return GetSheetResponse
     */
    public function getSheet($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSheetHeaders([]);

        return $this->getSheetWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSpaceDirectoriesRequest $tmpReq
     * @param GetSpaceDirectoriesHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectoriesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetSpaceDirectoriesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetSpaceDirectoriesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryId)) {
            $body['DentryId'] = $request->dentryId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetSpaceDirectories',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getSpaceDirectories',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSpaceDirectoriesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSpaceDirectoriesRequest $request
     *
     * @return GetSpaceDirectoriesResponse
     */
    public function getSpaceDirectories($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetSpaceDirectoriesHeaders([]);

        return $this->getSpaceDirectoriesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTemplateListByUserIdRequest $tmpReq
     * @param GetTemplateListByUserIdHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserIdWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetTemplateListByUserIdShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetTemplateListByUserIdShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetTemplateListByUserId',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/getTemplateListByUserId',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetTemplateListByUserIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTemplateListByUserIdRequest $request
     *
     * @return GetTemplateListByUserIdResponse
     */
    public function getTemplateListByUserId($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetTemplateListByUserIdHeaders([]);

        return $this->getTemplateListByUserIdWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetUserRequest $tmpReq
     * @param GetUserHeaders $tmpHeader
     * @param RuntimeOptions $runtime
     *
     * @return GetUserResponse
     */
    public function getUserWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetUserShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetUserShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->language)) {
            $body['language'] = $request->language;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetUser',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/im/getUser',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetUserRequest $request
     *
     * @return GetUserResponse
     */
    public function getUser($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetUserHeaders([]);

        return $this->getUserWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetWorkspaceRequest $tmpReq
     * @param GetWorkspaceHeaders $tmpHeader
     * @param RuntimeOptions      $runtime
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspaceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWorkspaceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetWorkspaceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspace',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getWorkspace',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspaceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWorkspaceRequest $request
     *
     * @return GetWorkspaceResponse
     */
    public function getWorkspace($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspaceHeaders([]);

        return $this->getWorkspaceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetWorkspacesRequest $tmpReq
     * @param GetWorkspacesHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return GetWorkspacesResponse
     */
    public function getWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new GetWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new GetWorkspacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->option)) {
            $request->optionShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->option, 'Option', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->workspaceIds)) {
            $request->workspaceIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->workspaceIds, 'WorkspaceIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->optionShrink)) {
            $body['Option'] = $request->optionShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceIdsShrink)) {
            $body['WorkspaceIds'] = $request->workspaceIdsShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetWorkspaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/getWorkspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetWorkspacesRequest $request
     *
     * @return GetWorkspacesResponse
     */
    public function getWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new GetWorkspacesHeaders([]);

        return $this->getWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertColumnsBeforeRequest $tmpReq
     * @param InsertColumnsBeforeHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return InsertColumnsBeforeResponse
     */
    public function insertColumnsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertColumnsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertColumnsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertColumnsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertColumnsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertColumnsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertColumnsBeforeRequest $request
     *
     * @return InsertColumnsBeforeResponse
     */
    public function insertColumnsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertColumnsBeforeHeaders([]);

        return $this->insertColumnsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InsertRowsBeforeRequest $tmpReq
     * @param InsertRowsBeforeHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBeforeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InsertRowsBeforeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InsertRowsBeforeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InsertRowsBefore',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/insertRowsBefore',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InsertRowsBeforeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InsertRowsBeforeRequest $request
     *
     * @return InsertRowsBeforeResponse
     */
    public function insertRowsBefore($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InsertRowsBeforeHeaders([]);

        return $this->insertRowsBeforeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param InviteUsersRequest $tmpReq
     * @param InviteUsersHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return InviteUsersResponse
     */
    public function inviteUsersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new InviteUsersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new InviteUsersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->inviteeList)) {
            $request->inviteeListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->inviteeList, 'InviteeList', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->inviteeListShrink)) {
            $body['InviteeList'] = $request->inviteeListShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'InviteUsers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/inviteUsers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return InviteUsersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param InviteUsersRequest $request
     *
     * @return InviteUsersResponse
     */
    public function inviteUsers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new InviteUsersHeaders([]);

        return $this->inviteUsersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCalendarsRequest $tmpReq
     * @param ListCalendarsHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return ListCalendarsResponse
     */
    public function listCalendarsWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListCalendarsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListCalendarsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListCalendars',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/listCalendars',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListCalendarsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCalendarsRequest $request
     *
     * @return ListCalendarsResponse
     */
    public function listCalendars($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListCalendarsHeaders([]);

        return $this->listCalendarsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEventsRequest $request
     * @param ListEventsHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return ListEventsResponse
     */
    public function listEventsWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new ListEventsShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->maxAttendees)) {
            $body['MaxAttendees'] = $request->maxAttendees;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->seriesMasterId)) {
            $body['SeriesMasterId'] = $request->seriesMasterId;
        }
        if (!Utils::isUnset($request->showDeleted)) {
            $body['ShowDeleted'] = $request->showDeleted;
        }
        if (!Utils::isUnset($request->syncToken)) {
            $body['SyncToken'] = $request->syncToken;
        }
        if (!Utils::isUnset($request->timeMax)) {
            $body['TimeMax'] = $request->timeMax;
        }
        if (!Utils::isUnset($request->timeMin)) {
            $body['TimeMin'] = $request->timeMin;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListEvents',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/listEvents',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEventsRequest $request
     *
     * @return ListEventsResponse
     */
    public function listEvents($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListEventsHeaders([]);

        return $this->listEventsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListNodesRequest $tmpReq
     * @param ListNodesHeaders $tmpHeader
     * @param RuntimeOptions   $runtime
     *
     * @return ListNodesResponse
     */
    public function listNodesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListNodesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListNodesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->parentNodeId)) {
            $body['ParentNodeId'] = $request->parentNodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListNodes',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/listNodes',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodesRequest $request
     *
     * @return ListNodesResponse
     */
    public function listNodes($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListNodesHeaders([]);

        return $this->listNodesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListReportRequest $tmpReq
     * @param ListReportHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return ListReportResponse
     */
    public function listReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['Cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->modifiedEndTime)) {
            $body['ModifiedEndTime'] = $request->modifiedEndTime;
        }
        if (!Utils::isUnset($request->modifiedStartTime)) {
            $body['ModifiedStartTime'] = $request->modifiedStartTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/listReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListReportRequest $request
     *
     * @return ListReportResponse
     */
    public function listReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListReportHeaders([]);

        return $this->listReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListWorkspacesRequest $tmpReq
     * @param ListWorkspacesHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspacesWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListWorkspacesShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ListWorkspacesShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->teamId)) {
            $body['TeamId'] = $request->teamId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->withPermissionRole)) {
            $body['WithPermissionRole'] = $request->withPermissionRole;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListWorkspaces',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/listWorkspaces',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListWorkspacesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListWorkspacesRequest $request
     *
     * @return ListWorkspacesResponse
     */
    public function listWorkspaces($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ListWorkspacesHeaders([]);

        return $this->listWorkspacesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param PatchEventRequest $tmpReq
     * @param PatchEventHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return PatchEventResponse
     */
    public function patchEventWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new PatchEventShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new PatchEventShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendees)) {
            $request->attendeesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendees, 'Attendees', 'json');
        }
        if (!Utils::isUnset($tmpReq->end)) {
            $request->endShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->end, 'End', 'json');
        }
        if (!Utils::isUnset($tmpReq->extra)) {
            $request->extraShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->extra, 'Extra', 'json');
        }
        if (!Utils::isUnset($tmpReq->location)) {
            $request->locationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->location, 'Location', 'json');
        }
        if (!Utils::isUnset($tmpReq->recurrence)) {
            $request->recurrenceShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->recurrence, 'Recurrence', 'json');
        }
        if (!Utils::isUnset($tmpReq->reminders)) {
            $request->remindersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->reminders, 'Reminders', 'json');
        }
        if (!Utils::isUnset($tmpReq->start)) {
            $request->startShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->start, 'Start', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesShrink)) {
            $body['Attendees'] = $request->attendeesShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->endShrink)) {
            $body['End'] = $request->endShrink;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        if (!Utils::isUnset($request->extraShrink)) {
            $body['Extra'] = $request->extraShrink;
        }
        if (!Utils::isUnset($request->isAllDay)) {
            $body['IsAllDay'] = $request->isAllDay;
        }
        if (!Utils::isUnset($request->locationShrink)) {
            $body['Location'] = $request->locationShrink;
        }
        if (!Utils::isUnset($request->recurrenceShrink)) {
            $body['Recurrence'] = $request->recurrenceShrink;
        }
        if (!Utils::isUnset($request->remindersShrink)) {
            $body['Reminders'] = $request->remindersShrink;
        }
        if (!Utils::isUnset($request->startShrink)) {
            $body['Start'] = $request->startShrink;
        }
        if (!Utils::isUnset($request->summary)) {
            $body['Summary'] = $request->summary;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PatchEvent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/patchEvent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PatchEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PatchEventRequest $request
     *
     * @return PatchEventResponse
     */
    public function patchEvent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new PatchEventHeaders([]);

        return $this->patchEventWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCloudRecordTextRequest $tmpReq
     * @param QueryCloudRecordTextHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryCloudRecordTextResponse
     */
    public function queryCloudRecordTextWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordTextShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordTextShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->direction)) {
            $body['Direction'] = $request->direction;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordText',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordText',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCloudRecordTextRequest $request
     *
     * @return QueryCloudRecordTextResponse
     */
    public function queryCloudRecordText($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordTextHeaders([]);

        return $this->queryCloudRecordTextWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCloudRecordVideoRequest $tmpReq
     * @param QueryCloudRecordVideoHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordVideoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordVideo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordVideo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordVideoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCloudRecordVideoRequest $request
     *
     * @return QueryCloudRecordVideoResponse
     */
    public function queryCloudRecordVideo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoHeaders([]);

        return $this->queryCloudRecordVideoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryCloudRecordVideoPlayInfoRequest $tmpReq
     * @param QueryCloudRecordVideoPlayInfoHeaders $tmpHeader
     * @param RuntimeOptions                       $runtime
     *
     * @return QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryCloudRecordVideoPlayInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryCloudRecordVideoPlayInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['ConferenceId'] = $request->conferenceId;
        }
        if (!Utils::isUnset($request->mediaId)) {
            $body['MediaId'] = $request->mediaId;
        }
        if (!Utils::isUnset($request->regionId)) {
            $body['RegionId'] = $request->regionId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryCloudRecordVideoPlayInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryCloudRecordVideoPlayInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryCloudRecordVideoPlayInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryCloudRecordVideoPlayInfoRequest $request
     *
     * @return QueryCloudRecordVideoPlayInfoResponse
     */
    public function queryCloudRecordVideoPlayInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryCloudRecordVideoPlayInfoHeaders([]);

        return $this->queryCloudRecordVideoPlayInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryConferenceInfoRequest $request
     * @param QueryConferenceInfoHeaders $tmpHeader
     * @param RuntimeOptions             $runtime
     *
     * @return QueryConferenceInfoResponse
     */
    public function queryConferenceInfoWithOptions($request, $tmpHeader, $runtime)
    {
        Utils::validateModel($request);
        $headers = new QueryConferenceInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConferenceInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryConferenceInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConferenceInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConferenceInfoRequest $request
     *
     * @return QueryConferenceInfoResponse
     */
    public function queryConferenceInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceInfoHeaders([]);

        return $this->queryConferenceInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryConferenceMembersRequest $tmpReq
     * @param QueryConferenceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return QueryConferenceMembersResponse
     */
    public function queryConferenceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryConferenceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryConferenceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryConferenceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryConferenceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryConferenceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryConferenceMembersRequest $request
     *
     * @return QueryConferenceMembersResponse
     */
    public function queryConferenceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryConferenceMembersHeaders([]);

        return $this->queryConferenceMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryDentryRequest $tmpReq
     * @param QueryDentryHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return QueryDentryResponse
     */
    public function queryDentryWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryDentryShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryDentryShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->dentryId)) {
            $body['DentryId'] = $request->dentryId;
        }
        if (!Utils::isUnset($request->includeSpace)) {
            $body['IncludeSpace'] = $request->includeSpace;
        }
        if (!Utils::isUnset($request->spaceId)) {
            $body['SpaceId'] = $request->spaceId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryDentry',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v2/documents/queryDentry',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryDentryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryDentryRequest $request
     *
     * @return QueryDentryResponse
     */
    public function queryDentry($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryDentryHeaders([]);

        return $this->queryDentryWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryLiveInfoRequest $tmpReq
     * @param QueryLiveInfoHeaders $tmpHeader
     * @param RuntimeOptions       $runtime
     *
     * @return QueryLiveInfoResponse
     */
    public function queryLiveInfoWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveInfoShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveInfoShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveInfo',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveInfo',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLiveInfoRequest $request
     *
     * @return QueryLiveInfoResponse
     */
    public function queryLiveInfo($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveInfoHeaders([]);

        return $this->queryLiveInfoWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryLiveWatchDetailRequest $tmpReq
     * @param QueryLiveWatchDetailHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetailWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveWatchDetailShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveWatchDetailShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveWatchDetail',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveWatchDetail',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveWatchDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLiveWatchDetailRequest $request
     *
     * @return QueryLiveWatchDetailResponse
     */
    public function queryLiveWatchDetail($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchDetailHeaders([]);

        return $this->queryLiveWatchDetailWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryLiveWatchUserListRequest $tmpReq
     * @param QueryLiveWatchUserListHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryLiveWatchUserListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryLiveWatchUserListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryLiveWatchUserList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryLiveWatchUserList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryLiveWatchUserListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryLiveWatchUserListRequest $request
     *
     * @return QueryLiveWatchUserListResponse
     */
    public function queryLiveWatchUserList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryLiveWatchUserListHeaders([]);

        return $this->queryLiveWatchUserListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMeetingRoomRequest $tmpReq
     * @param QueryMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return QueryMeetingRoomResponse
     */
    public function queryMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMeetingRoomRequest $request
     *
     * @return QueryMeetingRoomResponse
     */
    public function queryMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomHeaders([]);

        return $this->queryMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMeetingRoomGroupRequest $tmpReq
     * @param QueryMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions               $runtime
     *
     * @return QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMeetingRoomGroupRequest $request
     *
     * @return QueryMeetingRoomGroupResponse
     */
    public function queryMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupHeaders([]);

        return $this->queryMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMeetingRoomGroupListRequest $tmpReq
     * @param QueryMeetingRoomGroupListHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomGroupListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomGroupListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->request)) {
            $request->requestShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->request, 'Request', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestShrink)) {
            $body['Request'] = $request->requestShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomGroupList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomGroupList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomGroupListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMeetingRoomGroupListRequest $request
     *
     * @return QueryMeetingRoomGroupListResponse
     */
    public function queryMeetingRoomGroupList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomGroupListHeaders([]);

        return $this->queryMeetingRoomGroupListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryMeetingRoomListRequest $tmpReq
     * @param QueryMeetingRoomListHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomListWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryMeetingRoomListShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryMeetingRoomListShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->maxResults)) {
            $body['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['NextToken'] = $request->nextToken;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryMeetingRoomList',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryMeetingRoomList',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryMeetingRoomListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryMeetingRoomListRequest $request
     *
     * @return QueryMeetingRoomListResponse
     */
    public function queryMeetingRoomList($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryMeetingRoomListHeaders([]);

        return $this->queryMeetingRoomListWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryOrgTodoTasksRequest $tmpReq
     * @param QueryOrgTodoTasksHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasksWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryOrgTodoTasksShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryOrgTodoTasksShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->isDone)) {
            $body['isDone'] = $request->isDone;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $body['nextToken'] = $request->nextToken;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryOrgTodoTasks',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/queryOrgTodoTasks',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryOrgTodoTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryOrgTodoTasksRequest $request
     *
     * @return QueryOrgTodoTasksResponse
     */
    public function queryOrgTodoTasks($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryOrgTodoTasksHeaders([]);

        return $this->queryOrgTodoTasksWithOptions($request, $headers, $runtime);
    }

    /**
     * @param QueryScheduleConferenceRequest $tmpReq
     * @param QueryScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                 $runtime
     *
     * @return QueryScheduleConferenceResponse
     */
    public function queryScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new QueryScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new QueryScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->requestUnionId)) {
            $body['RequestUnionId'] = $request->requestUnionId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'QueryScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/queryScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return QueryScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param QueryScheduleConferenceRequest $request
     *
     * @return QueryScheduleConferenceResponse
     */
    public function queryScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new QueryScheduleConferenceHeaders([]);

        return $this->queryScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ReceiverListReportRequest $tmpReq
     * @param ReceiverListReportHeaders $tmpHeader
     * @param RuntimeOptions            $runtime
     *
     * @return ReceiverListReportResponse
     */
    public function receiverListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ReceiverListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new ReceiverListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ReceiverListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/receiverListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ReceiverListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ReceiverListReportRequest $request
     *
     * @return ReceiverListReportResponse
     */
    public function receiverListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new ReceiverListReportHeaders([]);

        return $this->receiverListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param RemoveAttendeeRequest $tmpReq
     * @param RemoveAttendeeHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return RemoveAttendeeResponse
     */
    public function removeAttendeeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new RemoveAttendeeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new RemoveAttendeeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->attendeesToRemove)) {
            $request->attendeesToRemoveShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->attendeesToRemove, 'AttendeesToRemove', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->attendeesToRemoveShrink)) {
            $body['AttendeesToRemove'] = $request->attendeesToRemoveShrink;
        }
        if (!Utils::isUnset($request->calendarId)) {
            $body['CalendarId'] = $request->calendarId;
        }
        if (!Utils::isUnset($request->eventId)) {
            $body['EventId'] = $request->eventId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'RemoveAttendee',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/calendar/removeAttendee',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RemoveAttendeeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param RemoveAttendeeRequest $request
     *
     * @return RemoveAttendeeResponse
     */
    public function removeAttendee($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new RemoveAttendeeHeaders([]);

        return $this->removeAttendeeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SaveContentRequest $tmpReq
     * @param SaveContentHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return SaveContentResponse
     */
    public function saveContentWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SaveContentShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SaveContentShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->contents)) {
            $request->contentsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->contents, 'Contents', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->contentsShrink)) {
            $body['Contents'] = $request->contentsShrink;
        }
        if (!Utils::isUnset($request->ddFrom)) {
            $body['DdFrom'] = $request->ddFrom;
        }
        if (!Utils::isUnset($request->templateId)) {
            $body['TemplateId'] = $request->templateId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SaveContent',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/saveContent',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SaveContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SaveContentRequest $request
     *
     * @return SaveContentResponse
     */
    public function saveContent($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SaveContentHeaders([]);

        return $this->saveContentWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SetColumnsVisibilityRequest $tmpReq
     * @param SetColumnsVisibilityHeaders $tmpHeader
     * @param RuntimeOptions              $runtime
     *
     * @return SetColumnsVisibilityResponse
     */
    public function setColumnsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetColumnsVisibilityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SetColumnsVisibilityShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->column)) {
            $body['Column'] = $request->column;
        }
        if (!Utils::isUnset($request->columnCount)) {
            $body['ColumnCount'] = $request->columnCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->visibility)) {
            $body['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetColumnsVisibility',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/setColumnsVisibility',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetColumnsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetColumnsVisibilityRequest $request
     *
     * @return SetColumnsVisibilityResponse
     */
    public function setColumnsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetColumnsVisibilityHeaders([]);

        return $this->setColumnsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SetRowsVisibilityRequest $tmpReq
     * @param SetRowsVisibilityHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return SetRowsVisibilityResponse
     */
    public function setRowsVisibilityWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SetRowsVisibilityShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SetRowsVisibilityShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->row)) {
            $body['Row'] = $request->row;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $body['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->visibility)) {
            $body['Visibility'] = $request->visibility;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SetRowsVisibility',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/setRowsVisibility',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetRowsVisibilityResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SetRowsVisibilityRequest $request
     *
     * @return SetRowsVisibilityResponse
     */
    public function setRowsVisibility($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SetRowsVisibilityHeaders([]);

        return $this->setRowsVisibilityWithOptions($request, $headers, $runtime);
    }

    /**
     * @param SimpleListReportRequest $tmpReq
     * @param SimpleListReportHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return SimpleListReportResponse
     */
    public function simpleListReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new SimpleListReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new SimpleListReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->cursor)) {
            $body['Cursor'] = $request->cursor;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->templateName)) {
            $body['TemplateName'] = $request->templateName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'SimpleListReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/simpleListReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SimpleListReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SimpleListReportRequest $request
     *
     * @return SimpleListReportResponse
     */
    public function simpleListReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new SimpleListReportHeaders([]);

        return $this->simpleListReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StartCloudRecordRequest $tmpReq
     * @param StartCloudRecordHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StartCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StartCloudRecordShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->mode)) {
            $body['Mode'] = $request->mode;
        }
        if (!Utils::isUnset($request->smallWindowPosition)) {
            $body['SmallWindowPosition'] = $request->smallWindowPosition;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StartCloudRecord',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/startCloudRecord',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StartCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StartCloudRecordRequest $request
     *
     * @return StartCloudRecordResponse
     */
    public function startCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StartCloudRecordHeaders([]);

        return $this->startCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StatisticsListByTypeReportRequest $tmpReq
     * @param StatisticsListByTypeReportHeaders $tmpHeader
     * @param RuntimeOptions                    $runtime
     *
     * @return StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StatisticsListByTypeReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StatisticsListByTypeReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->offset)) {
            $body['Offset'] = $request->offset;
        }
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->size)) {
            $body['Size'] = $request->size;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StatisticsListByTypeReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/statisticsListByTypeReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StatisticsListByTypeReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StatisticsListByTypeReportRequest $request
     *
     * @return StatisticsListByTypeReportResponse
     */
    public function statisticsListByTypeReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsListByTypeReportHeaders([]);

        return $this->statisticsListByTypeReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StatisticsReportRequest $tmpReq
     * @param StatisticsReportHeaders $tmpHeader
     * @param RuntimeOptions          $runtime
     *
     * @return StatisticsReportResponse
     */
    public function statisticsReportWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StatisticsReportShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StatisticsReportShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->reportId)) {
            $body['ReportId'] = $request->reportId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StatisticsReport',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/log/statisticsReport',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StatisticsReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StatisticsReportRequest $request
     *
     * @return StatisticsReportResponse
     */
    public function statisticsReport($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StatisticsReportHeaders([]);

        return $this->statisticsReportWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopCloudRecordRequest $tmpReq
     * @param StopCloudRecordHeaders $tmpHeader
     * @param RuntimeOptions         $runtime
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecordWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new StopCloudRecordShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new StopCloudRecordShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->conferenceId)) {
            $body['conferenceId'] = $request->conferenceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopCloudRecord',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/stopCloudRecord',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCloudRecordResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopCloudRecordRequest $request
     *
     * @return StopCloudRecordResponse
     */
    public function stopCloudRecord($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new StopCloudRecordHeaders([]);

        return $this->stopCloudRecordWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateLiveRequest $tmpReq
     * @param UpdateLiveHeaders $tmpHeader
     * @param RuntimeOptions    $runtime
     *
     * @return UpdateLiveResponse
     */
    public function updateLiveWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateLiveShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateLiveShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->coverUrl)) {
            $body['CoverUrl'] = $request->coverUrl;
        }
        if (!Utils::isUnset($request->introduction)) {
            $body['Introduction'] = $request->introduction;
        }
        if (!Utils::isUnset($request->liveId)) {
            $body['LiveId'] = $request->liveId;
        }
        if (!Utils::isUnset($request->preEndTime)) {
            $body['PreEndTime'] = $request->preEndTime;
        }
        if (!Utils::isUnset($request->preStartTime)) {
            $body['PreStartTime'] = $request->preStartTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateLive',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateLive',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateLiveResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateLiveRequest $request
     *
     * @return UpdateLiveResponse
     */
    public function updateLive($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateLiveHeaders([]);

        return $this->updateLiveWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMeetingRoomRequest $tmpReq
     * @param UpdateMeetingRoomHeaders $tmpHeader
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateMeetingRoomResponse
     */
    public function updateMeetingRoomWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMeetingRoomShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLabelIds)) {
            $request->roomLabelIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLabelIds, 'RoomLabelIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->roomLocation)) {
            $request->roomLocationShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->roomLocation, 'RoomLocation', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->isvRoomId)) {
            $body['IsvRoomId'] = $request->isvRoomId;
        }
        if (!Utils::isUnset($request->roomCapacity)) {
            $body['RoomCapacity'] = $request->roomCapacity;
        }
        if (!Utils::isUnset($request->roomId)) {
            $body['RoomId'] = $request->roomId;
        }
        if (!Utils::isUnset($request->roomLabelIdsShrink)) {
            $body['RoomLabelIds'] = $request->roomLabelIdsShrink;
        }
        if (!Utils::isUnset($request->roomLocationShrink)) {
            $body['RoomLocation'] = $request->roomLocationShrink;
        }
        if (!Utils::isUnset($request->roomName)) {
            $body['RoomName'] = $request->roomName;
        }
        if (!Utils::isUnset($request->roomPicture)) {
            $body['RoomPicture'] = $request->roomPicture;
        }
        if (!Utils::isUnset($request->roomStatus)) {
            $body['RoomStatus'] = $request->roomStatus;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMeetingRoom',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateMeetingRoom',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMeetingRoomResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMeetingRoomRequest $request
     *
     * @return UpdateMeetingRoomResponse
     */
    public function updateMeetingRoom($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomHeaders([]);

        return $this->updateMeetingRoomWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateMeetingRoomGroupRequest $tmpReq
     * @param UpdateMeetingRoomGroupHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroupWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateMeetingRoomGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateMeetingRoomGroupShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->groupId)) {
            $body['GroupId'] = $request->groupId;
        }
        if (!Utils::isUnset($request->groupName)) {
            $body['GroupName'] = $request->groupName;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateMeetingRoomGroup',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateMeetingRoomGroup',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateMeetingRoomGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateMeetingRoomGroupRequest $request
     *
     * @return UpdateMeetingRoomGroupResponse
     */
    public function updateMeetingRoomGroup($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateMeetingRoomGroupHeaders([]);

        return $this->updateMeetingRoomGroupWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateRangeRequest $tmpReq
     * @param UpdateRangeHeaders $tmpHeader
     * @param RuntimeOptions     $runtime
     *
     * @return UpdateRangeResponse
     */
    public function updateRangeWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateRangeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateRangeShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->backgroundColors)) {
            $request->backgroundColorsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->backgroundColors, 'BackgroundColors', 'json');
        }
        if (!Utils::isUnset($tmpReq->hyperlinks)) {
            $request->hyperlinksShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->hyperlinks, 'Hyperlinks', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->values)) {
            $request->valuesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->values, 'Values', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->backgroundColorsShrink)) {
            $body['BackgroundColors'] = $request->backgroundColorsShrink;
        }
        if (!Utils::isUnset($request->hyperlinksShrink)) {
            $body['Hyperlinks'] = $request->hyperlinksShrink;
        }
        if (!Utils::isUnset($request->numberFormat)) {
            $body['NumberFormat'] = $request->numberFormat;
        }
        if (!Utils::isUnset($request->rangeAddress)) {
            $body['RangeAddress'] = $request->rangeAddress;
        }
        if (!Utils::isUnset($request->sheetId)) {
            $body['SheetId'] = $request->sheetId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->valuesShrink)) {
            $body['Values'] = $request->valuesShrink;
        }
        if (!Utils::isUnset($request->workbookId)) {
            $body['WorkbookId'] = $request->workbookId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateRange',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateRange',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateRangeRequest $request
     *
     * @return UpdateRangeResponse
     */
    public function updateRange($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateRangeHeaders([]);

        return $this->updateRangeWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateScheduleConferenceRequest $tmpReq
     * @param UpdateScheduleConferenceHeaders $tmpHeader
     * @param RuntimeOptions                  $runtime
     *
     * @return UpdateScheduleConferenceResponse
     */
    public function updateScheduleConferenceWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateScheduleConferenceShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateScheduleConferenceShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->scheduleConferenceId)) {
            $body['ScheduleConferenceId'] = $request->scheduleConferenceId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateScheduleConference',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/ysp/updateScheduleConference',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateScheduleConferenceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateScheduleConferenceRequest $request
     *
     * @return UpdateScheduleConferenceResponse
     */
    public function updateScheduleConference($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateScheduleConferenceHeaders([]);

        return $this->updateScheduleConferenceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateTodoTaskRequest $tmpReq
     * @param UpdateTodoTaskHeaders $tmpHeader
     * @param RuntimeOptions        $runtime
     *
     * @return UpdateTodoTaskResponse
     */
    public function updateTodoTaskWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTodoTaskShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorIds)) {
            $request->executorIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorIds, 'executorIds', 'json');
        }
        if (!Utils::isUnset($tmpReq->participantIds)) {
            $request->participantIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->participantIds, 'participantIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->description)) {
            $body['description'] = $request->description;
        }
        if (!Utils::isUnset($request->done)) {
            $body['done'] = $request->done;
        }
        if (!Utils::isUnset($request->dueTime)) {
            $body['dueTime'] = $request->dueTime;
        }
        if (!Utils::isUnset($request->executorIdsShrink)) {
            $body['executorIds'] = $request->executorIdsShrink;
        }
        if (!Utils::isUnset($request->participantIdsShrink)) {
            $body['participantIds'] = $request->participantIdsShrink;
        }
        if (!Utils::isUnset($request->subject)) {
            $body['subject'] = $request->subject;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTodoTask',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/updateTodoTask',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTodoTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTodoTaskRequest $request
     *
     * @return UpdateTodoTaskResponse
     */
    public function updateTodoTask($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskHeaders([]);

        return $this->updateTodoTaskWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateTodoTaskExecutorStatusRequest $tmpReq
     * @param UpdateTodoTaskExecutorStatusHeaders $tmpHeader
     * @param RuntimeOptions                      $runtime
     *
     * @return UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatusWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateTodoTaskExecutorStatusShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateTodoTaskExecutorStatusShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->executorStatusList)) {
            $request->executorStatusListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->executorStatusList, 'executorStatusList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->executorStatusListShrink)) {
            $body['executorStatusList'] = $request->executorStatusListShrink;
        }
        if (!Utils::isUnset($request->operatorId)) {
            $body['operatorId'] = $request->operatorId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['taskId'] = $request->taskId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateTodoTaskExecutorStatus',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/task/updateTodoTaskExecutorStatus',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateTodoTaskExecutorStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateTodoTaskExecutorStatusRequest $request
     *
     * @return UpdateTodoTaskExecutorStatusResponse
     */
    public function updateTodoTaskExecutorStatus($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateTodoTaskExecutorStatusHeaders([]);

        return $this->updateTodoTaskExecutorStatusWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateWorkspaceDocMembersRequest $tmpReq
     * @param UpdateWorkspaceDocMembersHeaders $tmpHeader
     * @param RuntimeOptions                   $runtime
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceDocMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceDocMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceDocMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceDocMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceDocMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceDocMembersRequest $request
     *
     * @return UpdateWorkspaceDocMembersResponse
     */
    public function updateWorkspaceDocMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceDocMembersHeaders([]);

        return $this->updateWorkspaceDocMembersWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateWorkspaceMembersRequest $tmpReq
     * @param UpdateWorkspaceMembersHeaders $tmpHeader
     * @param RuntimeOptions                $runtime
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembersWithOptions($tmpReq, $tmpHeader, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateWorkspaceMembersShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        $headers = new UpdateWorkspaceMembersShrinkHeaders([]);
        OpenApiUtilClient::convert($tmpHeader, $headers);
        if (!Utils::isUnset($tmpHeader->accountContext)) {
            $headers->accountContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpHeader->accountContext, 'AccountContext', 'json');
        }
        if (!Utils::isUnset($tmpReq->members)) {
            $request->membersShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->members, 'Members', 'json');
        }
        if (!Utils::isUnset($tmpReq->tenantContext)) {
            $request->tenantContextShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tenantContext, 'TenantContext', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->membersShrink)) {
            $body['Members'] = $request->membersShrink;
        }
        if (!Utils::isUnset($request->tenantContextShrink)) {
            $body['TenantContext'] = $request->tenantContextShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $realHeaders = [];
        if (!Utils::isUnset($headers->commonHeaders)) {
            $realHeaders = $headers->commonHeaders;
        }
        if (!Utils::isUnset($headers->accountContextShrink)) {
            $realHeaders['AccountContext'] = Utils::toJSONString($headers->accountContextShrink);
        }
        $req = new OpenApiRequest([
            'headers' => $realHeaders,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateWorkspaceMembers',
            'version'     => '2023-04-26',
            'protocol'    => 'HTTPS',
            'pathname'    => '/dingtalk/v1/documents/updateWorkspaceMembers',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateWorkspaceMembersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateWorkspaceMembersRequest $request
     *
     * @return UpdateWorkspaceMembersResponse
     */
    public function updateWorkspaceMembers($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = new UpdateWorkspaceMembersHeaders([]);

        return $this->updateWorkspaceMembersWithOptions($request, $headers, $runtime);
    }
}
