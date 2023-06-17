<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait ApiOrderTrait
{
    public function getToken()
    {
        $url = get_setting('api_url') . '/login';
        $token = session('token', []);

        if (!$token) {
            $response = $this->curlRequest($url);
            $token = $response->data->token;
            session(['token' => $token]);
        }

        return $token;
    }

    public function orderList($filter)
    {
        $url = get_setting('api_url') . '/admin/order-item-list';
        $get_token = $this->getToken();
        $response = Http::withToken($get_token)->get($url, $filter);
        return $response->object();
    }

    public function curlRequest($url)
    {
        $response = Http::post($url, [
            'email' => get_setting('api_email'),
            'password' => get_setting('api_password'),
        ]);
        return $response->object();
    }

    public function order_update($data)
    {
        $get_token = $this->getToken();
        $url = get_setting('api_url') . '/admin/order-item-update';
        $response = Http::withToken($get_token)->post($url, $data);
        // dd($response->json());
        return $response->object();
    }

    public function recentorderList($filter)
    {
        $url = get_setting('api_url') . '/admin/recent-order';
        $get_token = $this->getToken();
        $response = Http::withToken($get_token)->get($url, $filter);
        return $response->object();
    }

    public function singleOrder($id)
    {
        $url = get_setting('api_url') . '/admin/order-show/' . $id;
        $get_token = $this->getToken();
        $response = Http::withToken($get_token)->get($url, $id);
        return $response->object();
    }

    public function orderStatusUpdate($data)
    {
        $get_token = $this->getToken();
        $url = get_setting('api_url') . '/admin/order-status-update';
        $response = Http::withToken($get_token)->post($url, $data);
        return $response->object();
    }

    public function OrderItem($id)
    {
        $url = get_setting('api_url') . '/admin/order-item-details/' . $id;
        $get_token = $this->getToken();
        $response = Http::withToken($get_token)->get($url, $id);
        return $response->object();
    }

    public function updateCouponTrait($data)
    {
        $get_token = $this->getToken();
        $url = get_setting('api_url') . '/admin/order/coupon-update';
        $response = Http::withToken($get_token)->post($url, $data);
        return $response->object();
    }

    public function depositCouponTrait($data)
    {
        $get_token = $this->getToken();
        $url = get_setting('api_url') . '/admin/order/deposit-update';
        $response = Http::withToken($get_token)->post($url, $data);
        return $response->object();
    }
}
