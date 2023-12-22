<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->dropdown == 'Client') {
               $admin = User::where('dropdown', 'Admin')->first();
                {
                    $user = User::where('token', $user->token)->first();
                    $tickets = json_decode($user->mytickets, true); 
                    $notifications = json_decode($user->notifications, true);
                    if ($notifications !== null) {
    
                        $unreadNotifications = array_filter($notifications, function ($notification) {
                            return $notification['status'] === 'unread';
                        });
                        $unreadNotificationsCount = count($unreadNotifications);
                    } else {
                        $unreadNotificationsCount = 0;
                    }
                    $closedTicketsCount = $openTicketsCount = $inProgressTicketsCount = 0;
                    $criticalCount = $urgentCount = $normalCount = 0;
                    if ($tickets && count($tickets) > 0) {
                        foreach ($tickets as $ticket) {
                            switch ($ticket['priority']) {
                                case 'Critical':
                                    $criticalCount++;
                                    break;
                                case 'Urgent':
                                    $urgentCount++;
                                    break;
                                case 'Normal':
                                    $normalCount++;
                                    break;
                            }
                            switch ($ticket['status']) {
                                case 'Closed':
                                    $closedTicketsCount++;
                                    break;
                                case 'Open':
                                    $openTicketsCount++;
                                    break;
                                case 'In-Progress':
                                    $inProgressTicketsCount++;
                                    break;
                            }
                        }
                    }
                    return view('tickets.client', [
                        'tickets' => $tickets,
                        'countOfUnread' => $unreadNotificationsCount,
                        'closedTicketsCount' => $closedTicketsCount,
                        'openTicketsCount' => $openTicketsCount,
                        'inProgressTicketsCount' => $inProgressTicketsCount,
                        'criticalCount' => $criticalCount,
                        'urgentCount' => $urgentCount,
                        'normalCount' => $normalCount,
                        'admin' => $admin
                    ]);
                }
                return view('tickets.client', compact('admin'));
            } else {
                $user = User::where('dropdown', 'Admin')->first();
                $tickets = json_decode($user->mytickets, true);
                $notifications = json_decode($user->notifications, true);
                if ($notifications !== null) {

                    $unreadNotifications = array_filter($notifications, function ($notification) {
                        return $notification['status'] === 'unread';
                    });
                    $unreadNotificationsCount = count($unreadNotifications);
                } else {
                    $unreadNotificationsCount = 0;
                }
                $closedTicketsCount = $openTicketsCount = $inProgressTicketsCount = 0;
                $criticalCount = $urgentCount = $normalCount = 0;
                if ($tickets && count($tickets) > 0) {
                    foreach ($tickets as $ticket) {
                        switch ($ticket['priority']) {
                            case 'Critical':
                                $criticalCount++;
                                break;
                            case 'Urgent':
                                $urgentCount++;
                                break;
                            case 'Normal':
                                $normalCount++;
                                break;
                        }
                        switch ($ticket['status']) {
                            case 'Closed':
                                $closedTicketsCount++;
                                break;
                            case 'Open':
                                $openTicketsCount++;
                                break;
                            case 'In-Progress':
                                $inProgressTicketsCount++;
                                break;
                        }
                    }
                }
                return view('tickets.admin', [
                    'tickets' => $tickets,
                    'countOfUnread' => $unreadNotificationsCount,
                    'closedTicketsCount' => $closedTicketsCount,
                    'openTicketsCount' => $openTicketsCount,
                    'inProgressTicketsCount' => $inProgressTicketsCount,
                    'criticalCount' => $criticalCount,
                    'urgentCount' => $urgentCount,
                    'normalCount' => $normalCount
                ]);
            }
        } else {
            return view('home.land');
        }
    }
}
