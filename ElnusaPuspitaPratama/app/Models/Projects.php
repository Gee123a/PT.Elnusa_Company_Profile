<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    // Data project sementara (dummy data)
    private static $projects = [
        [
            'id' => 1,
            'title' => 'Luxury Villa Paradise',
            'category' => 'Residential',
            'description' => 'Modern architecture meets tropical paradise with stunning ocean views.',
            'location' => 'Bali, Indonesia',
            'completed_date' => 'December 2024',
            'area' => '450 m²',
            'budget' => '$850,000',
            'image' => 'https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800',
            'is_featured' => true
        ],
        [
            'id' => 2,
            'title' => 'Corporate Office Tower',
            'category' => 'Commercial',
            'description' => 'A modern workspace designed for innovation and collaboration.',
            'location' => 'Jakarta, Indonesia',
            'completed_date' => 'September 2024',
            'area' => '2,500 m²',
            'budget' => '$2,300,000',
            'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800',
            'is_featured' => true
        ],
        [
            'id' => 3,
            'title' => 'Modern Family Residence',
            'category' => 'Residential',
            'description' => 'Contemporary living spaces designed for modern families with style.',
            'location' => 'Surabaya, Indonesia',
            'completed_date' => 'August 2024',
            'area' => '380 m²',
            'budget' => '$650,000',
            'image' => 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800',
            'is_featured' => true
        ],
        [
            'id' => 4,
            'title' => 'Heritage House Restoration',
            'category' => 'Renovation',
            'description' => 'Preserving history while adding modern comfort.',
            'location' => 'Bandung',
            'completed_date' => 'July 2024',
            'area' => '280 m²',
            'budget' => '$450,000',
            'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=500',
            'is_featured' => false
        ],
        [
            'id' => 5,
            'title' => 'Minimalist Apartment',
            'category' => 'Residential',
            'description' => 'Clean lines and functional spaces for urban living.',
            'location' => 'Tangerang',
            'completed_date' => 'June 2024',
            'area' => '85 m²',
            'budget' => '$180,000',
            'image' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500',
            'is_featured' => false
        ],
        [
            'id' => 6,
            'title' => 'Smart Home Villa',
            'category' => 'Residential',
            'description' => 'Intelligent home automation for modern lifestyle.',
            'location' => 'Bekasi',
            'completed_date' => 'May 2024',
            'area' => '420 m²',
            'budget' => '$720,000',
            'image' => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=500',
            'is_featured' => false
        ],
    ];

    /**
     * Ambil semua project
     */
    public static function allData()
    {
        return collect(self::$projects);
    }

    /**
     * Ambil hanya featured projects (untuk carousel)
     */
    public static function getFeatured()
    {
        return collect(self::$projects)->where('is_featured', true);
    }

    /**
     * Ambil project berdasarkan kategori
     */
    public static function getByCategory($category)
    {
        return collect(self::$projects)->where('category', $category);
    }

    /**
     * Ambil project berdasarkan ID
     */
    public static function find($id)
    {
        return collect(self::$projects)->firstWhere('id', $id);
    }
}
